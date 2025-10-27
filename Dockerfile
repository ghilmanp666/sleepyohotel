FROM php:8.2-apache

# Install PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql

#Copy all files into Apache web root
COPY . /var/www/html/

EXPOSE 80