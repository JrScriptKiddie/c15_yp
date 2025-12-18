#!/usr/bin/env bash
set -euo pipefail

# Network route first (before apk fetches)
ip route del default 2>/dev/null || true
ip route add default via "$GATEWAY_IP" || true

# Prepare ansible user and sshd configuration
chmod +x /usr/local/bin/ansible_agent_deploy.sh
/usr/local/bin/ansible_agent_deploy.sh

# Launch SSH daemon for ansible access
/usr/sbin/sshd -D -e &

# Hand over to dumb-init supervising supervisord like upstream
exec /usr/bin/dumb-init -- supervisord -c /etc/supervisor/supervisord.conf
