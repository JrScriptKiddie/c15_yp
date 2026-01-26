FROM alpine:3.20

ENV TZ=Etc/UTC
RUN apk add --no-cache shadow nftables iproute2 iptables openssh openssh-server sudo bash tcpdump nano suricata ethtool rsyslog

COPY start.sh /usr/local/bin/start.sh
COPY suricata.yaml /etc/suricata/suricata.yaml.template
COPY nftables.conf /etc/nftables.conf
RUN chmod +x /usr/local/bin/start.sh

CMD ["/usr/local/bin/start.sh"]
