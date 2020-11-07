# To change this license header, choose License Headers in Project Properties.
# To change this template file, choose Tools | Templates
# and open the template in the editor.
FROM ubuntu:latest

LABEL version="0.1"

ENV TZ=Europe/Luxembourg
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update --fix-missing 

RUN apt install -y apache2

RUN apt install -y curl

RUN apt install -y php libapache2-mod-php php-mysql php-cli php-xml unzip

RUN apt install -y composer

RUN apt install -y nano

RUN composer create-project symfony/website-skeleton /var/www/html/symfwebservice


EXPOSE 80
