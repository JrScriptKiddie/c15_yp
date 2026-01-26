#!/usr/bin/env bash
set -euo pipefail

# Prepare PATH
echo 'export PATH=/usr/sbin:/sbin:$PATH' > /etc/profile.d/00-sbin.sh

echo "[fw] Renaming interfaces by subnet..."
# Переименовываем все интерфейсы в понятный вид
while read -r line; do
  dev=$(echo "$line" | awk '{print $2}')
  cidr=$(echo "$line" | awk '{print $4}')
  [ "$dev" = "lo" ] && continue
  ip=${cidr%/*}
  # Derive /24 subnet x.y.z.0/24
  subnet=$(echo "$ip" | awk -F. '{printf "%s.%s.%s.0/24\n", $1,$2,$3}')
  new=""
  case "$subnet" in
    $SUBNET_UPLINK.0/24)   new="eth_uplink"  ;;
    $SUBNET_DEV.0/24)   new="eth_dev"  ;;
    $SUBNET_USERS.0/24)  new="eth_users"  ;;
    $SUBNET_DMZ.0/24)  new="eth_dmz" ;;
    $SUBNET_SERVERS.0/24)  new="eth_servers" ;;
    $SUBNET_ADMIN.0/24)  new="eth_admin" ;;
    $SUBNET_INFOSEC.0/24)  new="eth_infosec" ;;
  esac
  [ -z "$new" ] && continue
  [ "$dev" = "$new" ] && continue

  # Skip if target name is already taken
  if ip link show "$new" >/dev/null 2>&1; then
    echo "[fw] Target name '$new' already exists, skipping $dev"
    continue
  fi
  echo "[fw] renaming $dev ($cidr) -> $new"
  ip link set dev "$dev" down || true
  ip link set dev "$dev" name "$new" || true
  ip link set dev "$new" up || true
done < <(ip -o -4 addr show)

# Задаем дефолтный маршрут на NAT
echo "Adding default route via ${SUBNET_UPLINK}.1 on eth_uplink"
ip route add default via $SUBNET_UPLINK.1 dev eth_uplink || true
ip route add 10.11.0.0/16 via $SUBNET_DMZ.$VPN_SRV_IP

# Load nftables rules
nft -f /etc/nftables.conf

#Скрипт выполняет первичную конфиуграцию SSHD и создает пользователя для ansible
set -euo pipefail
echo "[fw] SSHD Configure started"
# SSH setup (avoid noisy errors if config dir missing)
mkdir -p /etc/ssh /run/sshd
if [ ! -f /etc/ssh/sshd_config ]; then
  cat > /etc/ssh/sshd_config <<'EOF'
Port 22
Protocol 2
HostKey /etc/ssh/ssh_host_rsa_key
HostKey /etc/ssh/ssh_host_ecdsa_key
HostKey /etc/ssh/ssh_host_ed25519_key
PasswordAuthentication yes
PermitRootLogin no
UsePAM yes
Subsystem sftp /usr/lib/openssh/sftp-server
EOF
fi
sed -i 's/^#\?PasswordAuthentication.*/PasswordAuthentication yes/' /etc/ssh/sshd_config || true
sed -i 's/^#\?PermitRootLogin.*/PermitRootLogin no/' /etc/ssh/sshd_config || true
ssh-keygen -A >/dev/null 2>&1 || true

# Add ansible user
echo "[fw] Add ansible user"
if ! id -u svc_ib_admin >/dev/null 2>&1; then
  useradd -m -s /bin/bash svc_ib_admin && echo "svc_ib_admin:${SVC_IB_ADMIN_PASSWORD}" | chpasswd
fi

echo 'svc_ib_admin ALL=(ALL) NOPASSWD: ALL' > /etc/sudoers.d/91-svc_ib_admin
chmod 0440 /etc/sudoers.d/91-svc_ib_admin

mkdir -p /run/sshd
chmod 755 /run/sshd

echo "[fw] Starting Suricata configuration..."

ALL_SUBNETS=$(env | grep '^SUBNET_' | cut -d= -f2 | sed 's/$/.0\/24/' | paste -sd "," -)

echo "[fw] Detected networks for HOME_NET: $ALL_SUBNETS"

if [ -z "$ALL_SUBNETS" ]; then
    echo "[fw] ERROR: No SUBNET_* variables found! Using 192.168.0.0/16 as fallback."
    ALL_SUBNETS="192.168.0.0/16"
fi

sed "s|\${SURICATA_HOME_NET}|$ALL_SUBNETS|g" /etc/suricata/suricata.yaml.template> /etc/suricata/suricata.yaml

IFACES_CONF=$(mktemp)

for IFACE in eth_uplink eth_dev eth_users eth_dmz eth_servers eth_admin eth_infosec; do
  if ip link show "$IFACE" >/dev/null 2>&1; then
    echo "[fw] Adding $IFACE to Suricata config"
    
    cat <<EOF >> "$IFACES_CONF"
  - interface: $IFACE
    cluster-id: $(( $RANDOM % 90 + 10 ))
    cluster-type: cluster_flow
    defrag: yes
EOF
    ethtool -K "$IFACE" gro off lro off tso off gso off || true
  fi
done


sed -i '/# INTERFACES_PLACEHOLDER/r '"$IFACES_CONF" /etc/suricata/suricata.yaml

rm "$IFACES_CONF"

suricata -T -c /etc/suricata/suricata.yaml || echo "[fw] Suricata config test failed!"
cp /var/lib/suricata/rules/suricata.rules /etc/suricata/suricata.rules
echo "[fw] configure rsyslog"
echo "local5.* @192.168.3.88:514" >> /etc/rsyslog.conf
rsyslogd -f /etc/rsyslog.conf &
suricata -c /etc/suricata/suricata.yaml -s /etc/suricata/suricata.rules -D &

# Keep running
echo "[fw] Start SSHD"
exec /usr/sbin/sshd -D