docker-compose build
docker-compose run php bash -c "composer install"
docker-compose up -d
docker-compose run php bash -c "yii migrate/up"
