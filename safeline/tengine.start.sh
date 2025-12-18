#!/bin/bash
set -e

echo "Route changing..."
ip route del default || true
ip route add default via $GATEWAY_IP || true

/usr/local/bin/entrypoint.sh

nginx -g "daemon off;"
