FROM mariadb:latest

COPY conf/default_authentication.cnf /etc/mysql/conf.d/default_authentication.cnf
COPY conf/default_charset.cnf /etc/mysql/conf.d/default_charset.cnf
COPY conf/default_timezone.cnf /etc/mysql/conf.d/default_timezone.cnf

COPY initdb/init.sql /docker-entrypoint-initdb.d/init.sql