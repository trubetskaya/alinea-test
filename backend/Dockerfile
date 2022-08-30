FROM php:8.1-fpm

WORKDIR /var/www/alinea-test

RUN apt-get update \
    && docker-php-ext-install pdo pdo_mysql
