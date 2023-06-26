FROM php:7.4-apache
COPY . /var/www/html/
RUN chown -R $USER:www-data /var/www # setting access 
RUN chmod -R a+r /var/www # allowing to access
EXPOSE 80