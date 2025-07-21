#!/bin/sh
set -e
echo "Starting WordPress with custom entrypoint"

# Instala dependencias del theme (por si acaso)
cd /var/www/html/wp-content/themes/mytheme
npm install

# Ejecuta el build de webpack
npm run build

# Llama al entrypoint original de WordPress
docker-entrypoint.sh php-fpm