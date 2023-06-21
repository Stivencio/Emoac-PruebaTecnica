# Comando para construir las imágenes de Docker
docker-compose build

# Comando para levantar la aplicación con Docker
docker-compose up -d

# Comando para instalar composer
docker-compose run php bash -c "composer install"

# Asignar permisos al directorio de assets
docker-compose run php bash -c "chmod -R 777 /app"

# Pausa de 5 segundos para permitir que el contenedor de MySQL se inicie completamente
sleep 5

# Comando para ejecutar las migraciones de Yii
docker-compose run php bash -c "php /app/yii migrate/up"