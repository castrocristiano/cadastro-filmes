FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libpq-dev \
    postgresql-client \
    unzip \
    && docker-php-ext-install pdo_pgsql \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html
