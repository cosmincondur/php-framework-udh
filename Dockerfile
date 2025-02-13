FROM php:8.1-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80