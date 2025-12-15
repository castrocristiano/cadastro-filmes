FROM php:8.2-apache

# Dependências do sistema
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libicu-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo_pgsql intl \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Instalar Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php

# Diretório da aplicação
WORKDIR /var/www/html

# Instalar CodeIgniter na raiz da aplicação
RUN composer create-project codeigniter4/appstarter .

# Permissões
RUN chmod -R 777 writable

# Apache apontando para public/
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
    && echo '<Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>' >> /etc/apache2/apache2.conf

CMD ["apache2-foreground"]
