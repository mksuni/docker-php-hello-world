FROM php:apache
COPY public/ /var/www/html/
RUN docker-php-ext-install mysqli
