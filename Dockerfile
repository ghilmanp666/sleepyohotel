FROM php:8.2-apache

# Install ekstensi mysqli dan pdo_mysqli
RUN docker-php-ext-install mysqli pdo
pdo_mysql

#Copy all files into Apache web root
COPY . /var/www/html/

# Aktifkan mod_rewrite (kalau pakai .htaccess
RUN a2enmod rewrite

EXPOSE 80