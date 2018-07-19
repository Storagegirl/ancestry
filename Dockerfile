
FROM php:7.2.1-apache
MAINTAINER Nicole Lang nicole.lang@storagegirl.de
RUN docker-php-ext-install pdo pdo_mysql mysqli

