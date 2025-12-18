FROM chaitin/safeline-tengine-g:latest

RUN sed -i 's|mirrors.dev.in.chaitin.net/ubuntu|archive.ubuntu.com/ubuntu|' /etc/apt/sources.list

ENV DEBIAN_FRONTEND=noninteractive TZ=Etc/UTC

RUN apt-get update \
 && apt-get install -y --no-install-recommends \
    iputils-ping \
    iproute2 \
    ca-certificates \
 && rm -rf /var/lib/apt/lists/*

COPY tengine.start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

CMD ["/usr/local/bin/start.sh"]
