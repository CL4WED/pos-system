FROM php:8.2-apache

RUN apt-get update && apt-get install -y libicu-dev \
    && docker-php-ext-install intl \
    && a2dismod mpm_event mpm_worker \
&& a2enmod mpm_prefork rewrite

WORKDIR /var/www/html
COPY . /var/www/html

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN chown -R www-data:www-data /var/www/html/writable

EXPOSE 80