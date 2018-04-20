FROM mysql
ADD init.sql /tmp/
# ROOT PASSWORD
ENV MYSQL_ROOT_PASSWORD=secret

#ENV MYSQL_DATABASE=sampledb
ENV MYSQL_USER=admin
ENV MYSQL_PASSWORD=secret


ENV MYSQL_DATA_DIR=/var/lib/mysql \
    MYSQL_RUN_DIR=/run/mysqld \
    MYSQL_LOG_DIR=/var/log/mysql


RUN /etc/init.d/mysql start && \
         mysql -u root -p$MYSQL_ROOT_PASSWORD  -e "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%' IDENTIFIED BY 'secret';FLUSH PRIVILEGES;" && \
        mysql -u root -p${MYSQL_ROOT_PASSWORD}  < /tmp/init.sql

#PORT
EXPOSE 3306
