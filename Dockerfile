FROM php:7.4-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
  libpq-dev \
  libzip-dev \
  && docker-php-ext-install pdo_mysql zip

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy application code
COPY . /var/www/html

# Set document root
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Set permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
