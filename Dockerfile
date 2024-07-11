# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Install additional dependencies if needed
# For example, to install PDO extension:
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache modules and configuration (if needed)
RUN a2enmod rewrite

# Expose port 80 to allow outside access to your container
EXPOSE 80

# Command to run on container start
CMD ["apache2-foreground"]