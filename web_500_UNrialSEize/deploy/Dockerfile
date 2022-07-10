FROM ubuntu:16.04

RUN sed -i 's/archive.ubuntu.com/mirrors.ustc.edu.cn/g' /etc/apt/sources.list

RUN apt-get update -y

RUN apt-get install -y nginx \
    php7.0-fpm

RUN apt-get install -y php-soap
 
RUN rm /var/www/html/*.html
COPY ./default /etc/nginx/sites-available/default
COPY ./src/* /var/www/html/
COPY ./start.sh /start.sh
RUN chmod a+x /start.sh

RUN chown -R www-data:www-data /var/www/html \
    && ln -s /var/www/html /html

RUN apt-get clean \
    && rm -rf /var/lib/apt/lists/*

EXPOSE 80 
CMD ["/start.sh"]
