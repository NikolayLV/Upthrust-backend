FROM php:8.1-fpm

# Установим системные зависимости и PHP-расширения
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Установим Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Установим рабочую директорию
WORKDIR /var/www

# Копируем Laravel-проект
COPY . /var/www

# Установим зависимости Laravel
RUN composer install

# Даем права
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www

EXPOSE 9000
CMD ["php-fpm"]
