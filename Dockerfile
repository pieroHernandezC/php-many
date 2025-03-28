# Usa una imagen oficial de PHP con Apache
FROM php:8.2-apache

# Copia los archivos de tu aplicación al contenedor
COPY . /var/www/html/

# Habilita los módulos necesarios de PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expone el puerto 80 para recibir tráfico web
EXPOSE 80