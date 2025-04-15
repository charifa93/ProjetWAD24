FROM php:8.2-cli

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    git unzip zip curl libicu-dev libonig-dev libzip-dev libpq-dev \
    && docker-php-ext-install intl pdo pdo_mysql opcache

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

WORKDIR /app

# Copier le projet
COPY . .

# Installer les dépendances Symfony
RUN composer install --no-dev --optimize-autoloader

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
