sudo docker build -f Dockerfile -t spring-app .

#docker run -p 7878:7878 spring-app 


docker run -it -p 7878:7878 --name mCunt spring-app