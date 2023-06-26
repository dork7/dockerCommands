# network

# steps
1. create docker network -> docker network create --subnet=172.2.0.0/16 my-network
2. run mysql container with network assigned ->  docker run -d -p 3306:3306 --name mysql-cont -e MYSQL_ROOT_PASSWORD=root --ip 172.2.0.2 --network=my-network  sql-img 
3. 
3. run php-apache container with network assigned-> docker run -d --name php-server -p 8080:80 --ip 172.2.0.3 --network=my-network  trucorp-web 


# create docker network -> 
##   run this cmd in dir, to build php image-> docker build -t trucorp-web .
##   run this cmd, to run php container -> docker run -i --name php-server -p 8080:80 trucorp-web

## to remove container -> docker rm php-server -f
## to remove image ->  docker rmi trucorp-web
## to remove network ->  docker network rm my-network
