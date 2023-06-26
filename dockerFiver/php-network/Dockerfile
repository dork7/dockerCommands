FROM php:7.4-apache

## php extension for connecting to sql 
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

## copy files to image
COPY . /var/www/html/
## changing permissions
RUN chown -R $USER:www-data /var/www # setting access 
RUN chmod -R a+r /var/www # allowing to access
## exposing port
EXPOSE 80