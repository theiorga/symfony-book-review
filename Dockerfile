# Use PHP with FPM
FROM php:8.2-fpm

# Set working directory inside the container
WORKDIR /app

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite

# Copy project files into the container
COPY . /app

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set correct permissions
RUN chown -R www-data:www-data /app/var /app/public/uploads

# Install Symfony dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Start PHP-FPM server
CMD ["php-fpm"]
