FROM php:7.2.2-apache
RUN apt-get update 
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
#RUN docker-php-ext-install apache2 apache2-doc apache2-utils
#RUN docker-php-ext-install php php-mysqlnd php7.0-mysql libapache2-mod-php libapache2-mod-php7.0
EXPOSE 80
