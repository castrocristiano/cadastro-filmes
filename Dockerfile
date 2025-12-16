FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libicu-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-install pgsql pdo_pgsql intl \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Instala Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php

WORKDIR /var/www/html

# Instala CodeIgniter 4 (no build)
RUN composer create-project codeigniter4/appstarter .

# Configura Apache para apontar para public/
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
 && echo '<Directory /var/www/html/public>\nAllowOverride All\nRequire all granted\n</Directory>' >> /etc/apache2/apache2.conf \
 && echo "ServerName localhost" >> /etc/apache2/apache2.conf

COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2-foreground"]