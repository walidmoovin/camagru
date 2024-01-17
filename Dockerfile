FROM php:7.4-fpm

RUN apt-get update && apt-get install -y nginx

RUN docker-php-ext-install pdo pdo_mysql

COPY . /var/www/html
COPY myapp.conf /etc/nginx/conf.d/default.conf

EXPOSE 80

CMD service nginx start && php-fpm