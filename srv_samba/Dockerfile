FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive TZ=Etc/UTC

RUN apt-get update \
 && apt-get install -y --no-install-recommends \
    samba \
    samba-common \
    samba-vfs-modules \
    supervisor \
    openssh-server \
    sudo \
    iproute2 \
    curl \
    gnupg \
    lsb-release \
    ca-certificates \
    acl \
 && rm -rf /var/lib/apt/lists/*

EXPOSE 22 139 445
EXPOSE 137/udp 138/udp

COPY start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

VOLUME ["/share"]

CMD ["/usr/local/bin/start.sh"]
