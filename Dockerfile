FROM debian:latest

# mount volume for mysql data
VOLUME /var/lib/mysql

# mount volume for logs
VOLUME /var/log

RUN apt-get update && \
    apt-get install -y apache2 php wget tar libapache2-mod-php php-mysql mariadb-server supervisor && \
    apt-get clean

# installing and unpackaging wordpress
RUN wget https://wordpress.org/latest.tar.gz -P /var/www/html/ && \
    tar -xzvf /var/www/html/latest.tar.gz -C /var/www/html/ && \
    cp -r /var/www/html/wordpress/* /var/www/html/ && \
    rm -rf /var/www/html/wordpress && \
    rm /var/www/html/latest.tar.gz


COPY files/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf

COPY files/apache2/apache2.conf /etc/apache2/apache2.conf

# copy the configuration file for php from files/ directory
COPY files/php/php.ini /etc/php/8.2/apache2/php.ini

# copy the configuration file for mysql from files/ directory
COPY files/mariadb/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

# copy the supervisor configuration file
COPY files/supervisor/supervisord.conf /etc/supervisor/supervisord.conf

# copy the configuration file for wordpress from files/ directory
COPY files/wp-config.php /var/www/html/wp-config.php

# create mysql socket directory
RUN mkdir /var/run/mysqld && chown mysql:mysql /var/run/mysqld

EXPOSE 80

CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/supervisord.conf"]






