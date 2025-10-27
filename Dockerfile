# Gunakan image PHP resmi dengan Apache
FROM php:8.2-apache

# Install ekstensi mysqli dan pdo_mysql
RUN docker-php-ext-install mysqli pdo_mysql

# Salin semua file project ke dalam container
COPY . /var/www/html/

# Aktifkan mod_rewrite (opsional)
RUN a2enmod rewrite

EXPOSE 80