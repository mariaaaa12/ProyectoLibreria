# Usa una imagen base con PHP y Apache
FROM php:8.2-apache

# Instala Python, pip, venv, PostgreSQL headers y herramientas de compilación
RUN apt-get update && \
    apt-get install -y \
    python3 \
    python3-pip \
    python3-venv \
    libpq-dev \
    gcc \
    build-essential && \
    apt-get clean

# Crear entorno virtual de Python
RUN python3 -m venv /opt/venv && \
    /opt/venv/bin/pip install --upgrade pip

# Copiar el código de la app al contenedor
COPY . /var/www/html/

# Instalar las dependencias de Python dentro del entorno virtual
RUN /opt/venv/bin/pip install -r /var/www/html/requirements.txt

# Agregar el entorno virtual al PATH para que se use por defecto
ENV PATH="/opt/venv/bin:$PATH"

# Exponer el puerto (Apache usa el 80 por defecto)
EXPOSE 80
