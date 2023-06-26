# PHP server
##   run this cmd in dir, to build php image-> 
docker build -t trucorp-web .
##   run this cmd, to run php container -> 
docker run -d --name php-server -p 8080:80 --ip 172.2.0.3 --network=my-network  trucorp-web 

## to remove container -> 
docker rm php-server -f
## to remove image ->  
docker rmi trucorp-web

## 
