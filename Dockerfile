# Use the official PHP base image
FROM php:7.4-apache

# Install additional dependencies if required
# For example, if your PHP app requires MySQL, uncomment the following line
# RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable MySQL extension
RUN docker-php-ext-install mysqli

# Copy your PHP application files to the container
COPY index.php /var/www/html
COPY src /var/www/html/src

# Set the working directory
WORKDIR /var/www/html

# Expose port 80 for Apache
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]