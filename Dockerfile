# Start server build with template for PHP 7.2 with Apache web server pre-installed
FROM php:7.2-apache

# Update OS environment
RUN apt-get update && apt-get dist-upgrade -y

# Install required utilities
RUN apt-get install -y apt-utils poppler-utils nano libzip-dev zip

# Install/Enable PHP Zip extension
RUN docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install zip

# Install composer and put binary into $PATH
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Enable Pretty URLs
RUN ["a2enmod","rewrite"]

# Adjust Apache config for new public directory
RUN ["rm","-Rf","/etc/apache2/sites-enabled/000-default.conf"]
RUN ["rm","-Rf","/etc/apache2/sites-active/000-default.conf"]
COPY ["virtualhost.conf","/etc/apache2/sites-enabled/000-default.conf"]
COPY ["virtualhost.conf","/etc/apache2/sites-active/000-default.conf"]
RUN ["rm","-Rf","virtualhost.conf"]

ADD ["./","/var/www/html"]

# Expose Apache web server's port 80 & 443
EXPOSE 80
EXPOSE 443

# Set default directory for entering container
WORKDIR /var/www/html

# Set the /var/www/html
VOLUME /var/www/html
