FROM ubuntu:22.04

# Отключаем интерактивные окна при установке
ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y \
    nginx \
    php-fpm \
    php-mysql \
    php-gd \
    php-zip \
    php-curl \
    php-mbstring \
    php-xml \
    php-intl \
    curl \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Копируем архив с сайтом и секрет для api
COPY wp.tar.gz /tmp/wp.tar.gz
COPY secret.txt /tmp/secret.txt 

# Настраиваем папки
RUN mkdir -p /var/www/wordpress /var/www/other /run/php

# Распаковка WP
RUN tar -xzf /tmp/wp.tar.gz -C /var/www/wordpress --strip-components=1 && \
    chown -R www-data:www-data /var/www/wordpress

# Копируем файлы api для порта 8080
COPY index.html /var/www/other/index.html 
COPY api.php /var/www/other/api.php

# Конфиги
COPY default.conf /etc/nginx/sites-available/default
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 80 8080

ENTRYPOINT ["entrypoint.sh"]
