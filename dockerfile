FROM php:8.2-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libpq-dev \
    libsqlite3-dev \
    sqlite3 \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip exif pcntl bcmath

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar archivos del proyecto
WORKDIR /var/www
COPY . .
# Copiar archivos del proyecto
# Instalar dependencias Laravel
RUN composer install --no-dev --optimize-autoloader

# Establecer permisos
RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www

# Exponer el puerto
EXPOSE 8000

# Comando para ejecutar Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
