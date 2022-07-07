FROM php:7.4-apache

LABEL maintainer="OscarRuiz"
ENV TZ=America/Bogota
COPY ./oscarruiz.conf /etc/apache2/sites-available/000-default.conf
WORKDIR /var/www/html
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime  \
    && a2enmod rewrite \
    && echo $TZ > /etc/timezone \
    && apt-get update && apt install -y \
    curl \
    libcap2-bin \
    nano \
    wget \
    zlib1g-dev \
    libicu-dev \
    libpng-dev \
    libxml2-dev \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install zip \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
    && apt-get install
COPY . /var/www/html
COPY .env.example .env
RUN  composer install --optimize-autoloader --no-dev
RUN  chmod -R ug+rwx storage bootstrap/cache \
    && chgrp -R www-data storage bootstrap/cache \
    && php artisan storage:link && php artisan route:cache && php artisan view:cache && php artisan key:generate
