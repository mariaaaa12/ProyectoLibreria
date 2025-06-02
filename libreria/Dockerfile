

FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql


# Instala Python y pip
RUN apt-get update && apt-get install -y \
    python3 \
    python3-pip \
    && a2enmod rewrite

# Copia el código al contenedor
COPY . /var/www/html/

# Instala dependencias de Python con bypass seguro de PEP 668
RUN pip3 install --upgrade pip --break-system-packages
RUN pip3 install --break-system-packages -r /var/www/html/requirements.txt

# Establece permisos (opcional)
RUN chown -R www-data:www-data /var/www/html
