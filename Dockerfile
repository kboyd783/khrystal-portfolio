FROM php:8.2-cli

# System deps
RUN apt-get update && apt-get install -y \
  git unzip libzip-dev libpng-dev libonig-dev libxml2-dev \
  && docker-php-ext-install pdo pdo_mysql zip \
  && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Node (for Vite build)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
  && apt-get update && apt-get install -y nodejs \
  && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www

# Install PHP deps
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Install JS deps + build assets
COPY package.json package-lock.json ./
RUN npm ci
COPY resources ./resources
COPY vite.config.* tailwind.config.* postcss.config.* ./
RUN npm run build

# Copy app
COPY . .

# Caches (safe even without DB)
RUN php artisan config:cache || true \
 && php artisan route:cache || true \
 && php artisan view:cache || true

ENV PORT=8000
EXPOSE 8000

# Start server on Render's port
CMD php -S 0.0.0.0:$PORT -t public
