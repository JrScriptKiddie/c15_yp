FROM ghcr.io/docker-mailserver/docker-mailserver:latest
COPY ./amavis/50-user /etc/amavis/conf.d/50-user
COPY ./amavis/05-node_id /etc/amavis/conf.d/05-node_id
RUN chown root:root /etc/amavis/conf.d/50-user /etc/amavis/conf.d/05-node_id \
 && chmod 0644 /etc/amavis/conf.d/50-user /etc/amavis/conf.d/05-node_id
RUN apt-get update && apt-get install -y openssh-server sudo
COPY start.sh /start.sh
RUN chmod +x /start.sh
ENTRYPOINT ["/start.sh"]
