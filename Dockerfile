FROM php:8.2-apache

# Installer les extensions nécessaires
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Activer mod_rewrite pour le routage MVC
RUN a2enmod rewrite

# Copier le code source
COPY . /var/www/html

# Définir le dossier de travail
WORKDIR /var/www/html

# Exposer le port 80
EXPOSE 80
