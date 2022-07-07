FROM alpine:3.15.4

RUN apk --update add \
        curl \
        unzip \
        lighttpd \
        php7-common \
        php7-dom \
        php7-json \
        php7-gd \
        php7-curl \
        php7-ctype \
        php7-xml \
        php7-simplexml \
        php7-pdo \
        php7-imap \
        php7-cgi \
        php7-soap \
        php7-xmlrpc \
        php7-ldap \
        php7-pdo_mysql \
        php7-mysqli \
        php7-fpm \
        php7-fileinfo \
        php7-session \
        php7-tokenizer \
        fcgi \
        && rm -Rf /var/cache/apk/*

RUN adduser www-data -G www-data -H -s /bin/false -D
RUN mkdir -p /scripts

COPY lighttpd.conf /etc/lighttpd/lighttpd.conf
COPY entrypoint.sh /scripts/entrypoint.sh
COPY install.sh /scripts/install.sh

RUN mkdir -p /var/www/wp-content/themes && \
    mkdir -p /run/lighttpd && \
    chown -R www-data. /run/lighttpd && \
    chmod +x /scripts/*.sh

COPY hube-ui /var/www/wp-content/themes/hube-ui
COPY wp-config.php /var/www/wp-config.php

RUN /scripts/install.sh

ENTRYPOINT ["sh", "/scripts/entrypoint.sh"]
