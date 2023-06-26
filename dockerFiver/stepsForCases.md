Case 1:
	1. docker build -t sql-img .
	2. docker run -d -p 3306:3306 --name mysql-cont -e MYSQL_ROOT_PASSWORD=root sql-img 
	3. docker exec -it mysql-cont bash //// to get inside container and run sql command
	4. 	mysql -uroot -proot // sql login 
	5. select user, host from mysql.user 
		
Case 2: 
	1. docker build -t trucorp-web .
	2. docker run -d --name php-server -p 8080:80 trucorp-web 
	3. Open localhost:8080 in browser


Case 3:
Note : You have to delete the already existing containers and image "trucorp-web" to do that use "docker rm php-server -f" and then "docker rmi trucorp-web". After that go to php-network dir and follow these steps
	1. docker network create --subnet=172.2.0.0/16 my-network
	2. docker build -t trucorp-web .
	3. docker run -d -p 3306:3306 --name mysql-cont -e MYSQL_ROOT_PASSWORD=root --ip 172.2.0.2 --network=my-network  sql-img
	4. docker run -d --name php-server -p 8080:80 --ip 172.2.0.3 --network=my-network  trucorp-web 