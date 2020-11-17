FROM php:apache
COPY public/ /var/www/html/
RUN docker-php-ext-install mysqli
# Common
RUN apt-get update \
	&& apt-get install -y \
		openssl \
		git \
		gnupg2
