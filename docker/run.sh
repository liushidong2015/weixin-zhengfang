#!/bin/bash
/etc/init.d/php-fpm restart
/etc/init.d/nginx restart
#/etc/init.d/mysqld restart
while true; do sleep 100; done
