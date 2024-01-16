FROM php:7.4-fpm

RUN apt-get update && apt-get install -y nginx

COPY . /var/www/html
COPY myapp.conf /etc/nginx/conf.d/default.conf

EXPOSE 80

CMD service nginx start && php-fpm