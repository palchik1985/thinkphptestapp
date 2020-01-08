FROM composer:latest AS composer
FROM trafex/alpine-nginx-php7

COPY --from=composer /usr/bin/composer /usr/bin/composer

user root

#need for same folder rights as local user
RUN apk --no-cache add shadow && \
    usermod -u 1000 nobody; \
    groupmod -g 1000 nobody;

RUN apk --update --no-cache add php7-xdebug php7-tokenizer php7-fileinfo \
    php7-pdo php7-pdo_mysql php7-session
    
    
user nobody

# Add application
WORKDIR /var/www/thinkphp

# Expose the port nginx is reachable on
EXPOSE 8080

# Let supervisord start nginx & php-fpm
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

# Configure a healthcheck to validate that everything is up&running
HEALTHCHECK --timeout=10s CMD curl --silent --fail http://127.0.0.1:8080/fpm-ping
