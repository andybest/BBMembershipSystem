FROM php:7.4-apache

RUN apt update \
        && apt install -y \
            g++ \
            libicu-dev \
            libpq-dev \
            libsodium-dev \
            libzip-dev \
            zip \
            zlib1g-dev \
        && docker-php-ext-install \
            intl \
            opcache \
            pdo \
            pdo_mysql \
            mysqli \
            sodium \
        && a2enmod rewrite

WORKDIR /var/www/bbms

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer