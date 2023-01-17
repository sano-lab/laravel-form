FROM php:8.2.0-fpm

WORKDIR /app

RUN export DEBIAN_FRONTEND=noninteractive DEBCONF_NONINTERACTIVE_SEEN=true && apt-get -q update && \
  apt-get -q install -y \
  git \
  unzip \
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libpng-dev \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/* \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
  && docker-php-ext-install -j$(nproc) gd \
  && docker-php-ext-install -j$(nproc) iconv \
  && docker-php-ext-install -j$(nproc) pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

#composer create-project --prefer-dist "laravel/laravel=8.*" .
#chmod -R 777 /app/storage
#php artisan migrate:fresh --force