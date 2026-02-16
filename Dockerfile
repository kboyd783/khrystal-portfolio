FROM php:8.2-cli

# System deps
RUN apt-get update && apt-get install -y \
  git unzip libzip-dev libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
  libonig-dev libxml2-dev libicu-dev \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install pdo pdo_mysql zip gd intl \
  && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Node (for Vite build)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
  && apt-get update && apt-get install -y nodejs \
  && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www

# Copy composer files first for caching
COPY composer.json composer.lock ./

# ✅ Avoid Laravel scripts running during build (they can fail on Render)
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

# JS deps + build
COPY package.json package-lock.json ./
RUN npm ci

# Copy the rest
COPY . . RUN rm -f bootstrap/cache/*.php


# Build assets
RUN npm run build

ENV PORT=8000
EXPOSE 8000

CMD php artisan config:clear \
 && php artisan route:clear \
 && php artisan view:clear \
 && php -S 0.0.0.0:$PORT -t public

