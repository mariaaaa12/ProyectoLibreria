FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    python3 python3-pip \
    libapache2-mod-php \
    && a2enmod rewrite

COPY . /var/www/html/

# Instalar dependencias de Python
RUN pip3 install --upgrade pip
RUN pip3 install -r /var/www/html/requirements.txt

# Establecer permisos apropiados (opcional)
RUN chown -R www-data:www-data /var/www/html
