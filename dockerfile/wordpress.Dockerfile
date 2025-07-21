FROM wordpress:6.5.2-fpm-alpine

# Instala node y npm
RUN apk add --no-cache nodejs npm
COPY dockerfile/start-wordpress.sh /start-wordpress.sh
RUN chmod +x /start-wordpress.sh
ENTRYPOINT ["/start-wordpress.sh"]