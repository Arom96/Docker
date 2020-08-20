# Prueba Segundo Bimestre Servicios Sobre Redes

# Integrantes:
     * Aarón Cruz
     * Anthony Tacuri

## Arquitectura de una aplicación con contenedores Docker

<img src="img/11.JPG" alt="Imagen" width="500" height="600">

## MariaDB

1. Primero abrimos la aplicación Kitematic e instalamos las bases de datos (MariaDB y PostgreSQL)

<img src="img/1.JPG" alt="Imagen" width="500" height="600">

## PostgreSQL

<img src="img/2.JPG" alt="Imagen" width="500" height="600">

2. Luego abrimos una terminal para configurar nuestras bases de datos y conectarnos a las bases de datos.

     * docker run -d --rm --name pruebadb -e MYSQL_ROOT_PASSWORD=root -p 3306:3306 mariadb
     * docker run -d --rm --name pruebasr -e POSTGRES_PASSWORD=root -p 5432:5432 postgres

3. Verificamos que hayamos creado nuestros contenedores con el siguiente comando 

     * docker ps

<img src="img/3.JPG" alt="Imagen">



