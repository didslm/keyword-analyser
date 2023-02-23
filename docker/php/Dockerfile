FROM php:8.1-fpm

#install zip
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

RUN docker-php-ext-install pdo_mysql && \
pecl install xdebug && \
docker-php-ext-enable xdebug && \
docker-php-ext-install mysqli

COPY ./php-custom.ini /usr/local/etc/php/conf.d/php-custom.ini

EXPOSE 9000