FROM php:7-fpm

RUN apt-get update && apt-get install -my git-core \
&& curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
&& docker-php-ext-install pdo_mysql mbstring

WORKDIR /var/www