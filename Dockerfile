FROM php:8.2-cli

RUN apt-get update && apt-get install -y libicu-dev \
    && docker-php-ext-install intl \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /app

COPY . /app

RUN chmod -R 775 writable

EXPOSE 8080

CMD ["sh", "-c", "php spark serve --host 0.0.0.0 --port ${PORT:-8080}"]
