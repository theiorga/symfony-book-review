FROM php:8.2.0-fpm

WORKDIR /app

RUN apt-get update

RUN apt-get -y install git zip libpq-dev

RUN apt-get install -y \
      libxml2-dev \
      && docker-php-ext-install xml

RUN docker-php-ext-install pdo pdo_pgsql pgsql

RUN curl -sL https://getcomposer.org/installer | php -- --install-dir /usr/bin --filename composer

RUN pecl install xdebug

CMD ["php-fpm"]