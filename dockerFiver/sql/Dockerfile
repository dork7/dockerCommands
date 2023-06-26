FROM mysql

# Add a database
ENV MYSQL_DATABASE mydb

## to set root pass
ENV MYSQL_ROOT_PASSWORD=root
# add marketing user to the database
ADD init-development.sql /docker-entrypoint-initdb.d

