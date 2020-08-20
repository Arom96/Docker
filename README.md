# Prueba Segundo Bimestre Servicios Sobre Redes

# Integrantes:
     * Aarón Cruz
     * Anthony Tacuri

## Arquitectura de una aplicación con contenedores Docker

<img src="img/11.JPG" alt="Imagen" width="500" height="600">

## MariaDB

1. Primero abrimos la aplicación Kitematic e instalamos las bases de datos (MariaDB y PostgreSQL)

<img src="img/1.JPG" alt="Imagen">

## PostgreSQL

<img src="img/2.JPG" alt="Imagen">

2. Luego abrimos una terminal para configurar nuestras bases de datos y conectarnos a las bases de datos.

     * docker run -d --rm --name pruebadb -e MYSQL_ROOT_PASSWORD=root -p 3306:3306 mariadb
     * docker run -d --rm --name pruebasr -e POSTGRES_PASSWORD=root -p 5432:5432 postgres

3. Verificamos que hayamos creado nuestros contenedores con el siguiente comando 

     * docker ps

<img src="img/3.JPG" alt="Imagen">

4. Conectamos nuestras bases de datos con DBeaver una aplicación para administrar bases de datos

## MariaDB
<img src="img/4.JPG" alt="Imagen">

## PostgreSQL
<img src="img/5.JPG" alt="Imagen">

5. Creamos una base de datos en cada conexion llamada "serviciosdb" con una tabla llamada "estudiantes"

## MariaDB
<img src="img/6.JPG" alt="Imagen">

## PostgreSQL
<img src="img/7.JPG" alt="Imagen">

6. Ingresamos un dato para luego consumirlo desde la aplicación web

## MariaDB
<img src="img/8.JPG" alt="Imagen">

## PostgreSQL
<img src="img/9.JPG" alt="Imagen">

<hr>

## Creación del servidor apache php

7. Creamos una carpeta para levantar nuestro servidor apache, en este caso es la carpeta llamaca apache

<img src="img/10.JPG" alt="Imagen">

8. Dentro de esa carpeta creamos una carpeta para añadir neustros archivos php en este caso son dos mariadb.php y postgre.php

<img src="img/111.JPG" alt="Imagen">

9. Posteriormente movemos nuestros archivos a la carpeta creada anteriormente "sites"

<img src="img/12.JPG" alt="Imagen">

10. Abrimos la carpeta apache en el editor de código de visual studio.

<img src="img/13.JPG" alt="Imagen">

11. Creamos un nuevo archivo Dockerfile para crear una nueva imagen

<img src="img/14.JPG" alt="Imagen">

12. Abrimos la terminal de windows y ejecutamos el siguiente comando docker pull php:7.4-apache

<img src="img/15.JPG" alt="Imagen">

13. Dentro del archivo Dockerfile escribimos las siguientes lineas de código

<img src="img/16.JPG" alt="Imagen">

14. Posteriormente ejecutamos el siguiente comando en la carpeta de apache "docker build -t pruebab2 ." para construir la imagen

<img src="img/17.JPG" alt="Imagen">

15. Finalmente ejecutamos el siguiente comando para la configuración final "docker run -i --rm  --name pruebab2 -p 80:80 pruebab2"

<img src="img/18.JPG" alt="Imagen">

16. Ahora ya podemos levantar el siguiente comando para levantar nuestro servidor "docker run -i --rm --name pruebab2 -p 80:80 pruebab2"

<img src="img/19.JPG" alt="Imagen">

17. Verificamos los resultados en el navegador de los archivos php mariadb.php y postgre.php

## MariaDB

<img src="img/20.JPG" alt="Imagen">

## Postrgree

<img src="img/21.JPG" alt="Imagen">

## Hamachi

18. Para la conexión de la base de datos de mariadb y postgree en otro equipo usamos la aplicación de hamachi para crear una vpn y tener conexion entre la máquina cliente, servidor apache y SGBD.

<img src="img/22.JPG" alt="Imagen">








