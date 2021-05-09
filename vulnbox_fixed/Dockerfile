FROM ubuntu:latest
ENV DEBIAN_FRONTEND noninteractive
USER root
RUN apt-get update
RUN apt-get -y upgrade
RUN apt-get -y install apache2 php libapache2-mod-php
RUN rm /var/www/html/index.html
COPY webapp/ /var/www/html/
RUN usermod -G adm www-data
RUN chown -R www-data:www-data /var/www/html
EXPOSE 80
CMD ["apachectl", "-D", "FOREGROUND"]
