## script to automate build process 
docker rm php-server -f
docker rmi trucorp-web
docker build -t trucorp-web .
docker run -d --name php-server -p 8080:80 --ip 172.2.0.3 --network=my-network  trucorp-web 

