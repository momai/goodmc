# Dockerfile
FROM php:5.4-fpm

# Установка расширений PHP
RUN docker-php-ext-install mysqli
