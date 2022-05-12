FROM php:7.4-apache

RUN apt update \
        && apt install -y \
            g++ \
            libicu-dev \
            libmcrypt-dev \
            libpq-dev \
            libsodium-dev \
            libzip-dev \
            zip \
            zlib1g-dev \
        && pecl install mcrypt-1.0.4 \
        && docker-php-ext-install \
            intl \
            exif \
            opcache \
            pdo \
            pdo_mysql \
            mysqli \
            sodium \
            zip \
        && docker-php-ext-enable mcrypt \
        && a2enmod rewrite

WORKDIR /var/www/bbms

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer