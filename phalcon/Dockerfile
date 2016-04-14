FROM php:5.6-apache
MAINTAINER MilesChou <jangconan@gmail.com>

# Install require extension
RUN apt-get update -y && apt-get install -y zlib1g-dev git && apt-get clean && rm -r /var/lib/apt/lists/*
RUN docker-php-ext-install zip

RUN git clone git://github.com/phalcon/cphalcon.git /usr/local/src/cphalcon && \
    cd /usr/local/src/cphalcon/build && git checkout phalcon-v2.0.10 && ./install && \
    echo "extension=phalcon.so" > /usr/local/etc/php/conf.d/phalcon.ini

# Install composer
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# Fixed Apache setting
RUN sed -i 's/DocumentRoot.*/DocumentRoot \/var\/www\/html\/public/g' /etc/apache2/apache2.conf
RUN a2enmod rewrite

# Install composer dependencies
COPY composer.json ./
COPY composer.lock ./
RUN composer install --optimize-autoloader

COPY public ./public
