FROM php:8.2-apache

# Instala Python y pip
RUN apt-get update && apt-get install -y \
    python3 \
    python3-pip \
    && a2enmod rewrite

# Copia el código fuente al contenedor
COPY . /var/www/html/

# Instala las dependencias de Python
RUN pip3 install --upgrade pip
RUN pip3 install -r /var/www/html/requirements.txt

# Establece permisos (opcional)
RUN chown -R www-data:www-data /var/www/html
