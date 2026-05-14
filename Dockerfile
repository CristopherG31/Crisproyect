FROM php:8.2-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl

# Instalar extensiones PHP IMPORTANTES
RUN docker-php-ext-install pdo pdo_mysql

# (opcional pero recomendado)
RUN docker-php-ext-install gd

# Copiar proyecto
COPY . /var/www

WORKDIR /var/www

# Permisos (importante en Laravel)
RUN chown -R www-data:www-data /var/www

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000

RUN docker-php-ext-install pdo pdo_mysql