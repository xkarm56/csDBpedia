#!/bin/sh

cd /etl
exec ./start.sh &

until curl -s --head  --request GET http://localhost:8080 | grep "200 OK" > /dev/null; do 
    sleep 1s
    echo "waiting for LinkedPipes"
done

#spustit pipeline ze souboru
curl -X POST -H "Content-Type: multipart/form-data" -F "pipeline=@docker-pipeline.jsonld" localhost:8080/resources/executions

#spustit nginx
nginx -g 'daemon off;'