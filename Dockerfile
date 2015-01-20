FROM ubuntu:14.04
MAINTAINER Darren Shaw <shawdm@gmail.com>

ENV DEBIAN_FRONTEND noninteractive

#install wordpress
RUN apt-get update
RUN apt-get -y install unzip
RUN apt-get -y install wget
RUN cd /usr/share
RUN wget http://wordpress.org/wordpress-4.1.zip
RUN unzip wordpress-4.1.zip
RUN rm -f wordpress-4.1.zip
RUN rm -rf /var/www/html
RUN ln -s /usr/share/wordpress /var/www/html
RUN apachectl restart