FROM php:8.2-fpm

# Dependencias del sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev

# Extensiones PHP
RUN docker-php-ext-install pdo pdo_mysql gd zip

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copiar proyecto
COPY . .

# 🔥 INSTALAR LARAVEL DEPENDENCIAS (ESTO TE FALTABA)
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Permisos Laravel
RUN chown -R www-data:www-data /var/www \
    && chmod -R 777 storage bootstrap/cache

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000