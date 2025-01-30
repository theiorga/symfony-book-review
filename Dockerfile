# Use PHP-FPM base image
FROM php:8.2-fpm

# Set working directory
WORKDIR /app

# Install system dependencies, including SQLite
RUN apt-get update && apt-get install -y \
    sqlite3 \
    libsqlite3-dev \
    && rm -rf /var/lib/apt/lists/*

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite

# Copy project files into the container
COPY . /app

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Ensure necessary directories exist before setting permissions
RUN mkdir -p /app/var \
    && chown -R www-data:www-data /app/var /app/public/uploads

# Install Symfony dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose PHP-FPM port
EXPOSE 9000

CMD ["php-fpm"]
