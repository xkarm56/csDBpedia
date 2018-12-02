# First of all you need to install Docker and Run it! Make sure it is running by "docker version" in CMD.

#1 Download all files from repository in .zip file to localhost and extract downloaded files to new folder

#2 Run CMD in new folder

#3 Make a docker build command "docker build ."

#3.1 Output of build command is image, you will see identificator of the image (combination of letter and digits)

#4 Run the image wit command "docker run -d -p 8080:8080 -p 80:80 IMAGE_IDENTIFICATOR". It is ok to type just 3 char from identificator.
#4.1 -p is connection of ports of docker container and host PC (8080 is for LinkedPipes and 80 for web preview of stats)

#5 wait a moment, linkedpipes pipeline process is in progress. You can check the progress on localhost:8080. 
#5.1 After it is done,  you will see working example of stats vizualization on localhost:80
#5.2 Check created dataset by:
				 "docker exe -it IMAGE_IDENTIFICATOR /bin/bash"
				 "cd www"
				 "ls"
     There should be statistics-data.ttl and statistics-data.txt 

#6 Download those new datasets via docker commands like "docker cp IMAGE_IDENTIFICATOR:/etl/www/statistics-data.ttl <C:\example\dir\path\in\your\pc>" (use "exit" to exit 5.2)
6.1 Publish datasets on DBpedia



USEFULL commands:

- showing docker images "docker images"
- removing docker images "docker rmi identificator"
- showing docker container "docker container ls -a"
- stopping docker container "docker container stop identificator"
- removing docker container "docker container rm identificator"
- forcing remove docker container "docker container rm identificator -f"