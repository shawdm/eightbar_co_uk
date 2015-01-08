#!/usr/bin/env bash

# wordpress install
apt-get update
apt-get install unzip
cd /usr/share
wget http://wordpress.org/wordpress-4.1.zip
unzip wordpress-4.1.zip
rm -f wordpress-4.1.zip

# apache config
rm -rf /var/www/html
ln -s /usr/share/wordpress /var/www/html
cp /vagrant/bootstrap/wp-config-development.php /usr/share/wordpress/wp-config.php
ln -s /vagrant/grassroots /usr/share/wordpress/wp-content/themes/grassroots
apachectl restart

# mysql create database
start mysql
mysql -u root -proot -e "create database eightbar_co_uk";
mysql -u root -proot eightbar_co_uk < /vagrant/bootstrap/eightbar_dev.sql
