MAINTAINER dev.lubinets@gmail.com

FROM php:8.0-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get dist-upgrade -y && apt-get install -y \
    git \
    curl \
    libmemcached-dev \
    libz-dev \
    libpq-dev \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libssl-dev \
    libwebp-dev \
    libxpm-dev \
    libmcrypt-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    mariadb-client \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ADD ./docker-compose/php/custom-php.ini /usr/local/etc/php/conf.d/custom-php.ini
COPY ./composer.json /var/www/composer.json
COPY ./composer.lock /var/www/composer.lock
# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

RUN pecl install mongodb \
    && echo "extension=mongodb.so" > /usr/local/etc/php/conf.d/ext-mongodb.ini

RUN pecl install -o -f redis \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug
COPY ./docker-compose/php/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
COPY ./docker-compose/logs/xdebug.log /tmp/logs/xdebug.log
# Set working directory
WORKDIR /var/www
USER $user

CMD ["php-fpm"]
