# установка php + apache
FROM php:8.2.0-apache

# установить расширения для работы с MySQL
RUN docker-php-ext-install pdo mysqli pdo_mysql

# # Устанавливаем зависимости для сборки расширений PHP
# RUN apt-get update && apt-get install -y \
#     libfreetype6-dev \
#     libjpeg62-turbo-dev \
#     libpng-dev \
#     libwebp-dev \
#     && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
#     && docker-php-ext-install gd

# # Включаем расширение GD
# RUN docker-php-ext-enable gd