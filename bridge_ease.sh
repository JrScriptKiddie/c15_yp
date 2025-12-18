sudo tee /etc/sysctl.d/99-docker-bridge.conf > /dev/null <<'EOF'
net.bridge.bridge-nf-call-iptables = 0
net.bridge.bridge-nf-call-ip6tables = 0
net.bridge.bridge-nf-call-arptables = 0
EOF
sudo sysctl --system