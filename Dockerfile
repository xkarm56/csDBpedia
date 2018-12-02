FROM linkedpipes/etl

RUN mkdir -p /etl/www

#KOPIROVANI CUSTOM SOUBORU
COPY www /etl/www
COPY configuration.properties /etl/deploy/
COPY docker-pipeline.jsonld /etl
COPY custom-start.sh /etl
RUN chmod a+x custom-start.sh

#PRIDANI WEBOVEHO SERVERU PRO STATISTIKY
RUN apt-get update
RUN apt-get install -y nginx
RUN rm -v /etc/nginx/nginx.conf
ADD nginx.conf /etc/nginx/

#SPUSTENI 
CMD ["/bin/bash", "/etl/custom-start.sh"]
EXPOSE 80 8080
