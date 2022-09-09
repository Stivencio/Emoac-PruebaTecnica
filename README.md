<p align="center">
    <h1 align="center">Prueba Técnica Emoac</h1>
</p>

Instalaciones previas
-------------------

- [Composer](https://getcomposer.org/)

- [Docker version 20.10.17, build 100c701](https://www.docker.com/products/docker-desktop/)


### Clonar repositorio
```sh
git clone https://github.com/Stivencio/Emoac-PruebaTecnica.git
```


## Ejecutar con Docker


### Instalar dependencias de composer
```sh
$ composer install
```
### Crear e iniciar contenedores
```sh
$ docker-compose up -d
```
### Cargar Base de Datos
```sh
$ docker exec -i emoac-pruebatecnica_php_1 php yii migrate/up
```