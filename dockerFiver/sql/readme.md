# mysql
##   run this cmd in dir, to build sql image
docker build -t sql-img .

##   run this cmd, to run sql container  

docker run -d -p 3306:3306 --name mysql-cont -e MYSQL_ROOT_PASSWORD=root --ip 172.2.0.2 --network=my-network  sql-img 

## to get inside container and run sql command
docker exec -it mysql-cont bash
## sql login 
mysql -uroot -proot
select user, host from mysql.user


## to remove container
docker rm mysql-cont -f
## to remove image 
docker rmi sql-img
 
	