<?php

////////////////////////////////////////////////////////////
///  MYSQL   //////////////////////////////////////////////
////////////////////////////////////////////////

mysql -u root -p

service mysql start	

show databases;

/////  CONSULTAS  /////

//Ver usuarios
SELECT user,authemtication_string,plugin,host FROM mysql.user;
//Modificar usuarios
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY'duty10460duty10460xboxGAMER+++';
// Crear usuarios
CREATE USER 'example_user'@'%' IDENTIFIED WITH mysql_native_password BY 'password';
// Dar permisos a usuarios
GRANT ALL ON example_database.* TO 'example_user'@'%';
// Actualizar privilegios
FLUSH PRIVILEGES  

// Crear bases de datos
CREATE DATABASE
//Ver bases de datos
SHOW DATABASES;

////// Pildoras informaticas ////////////
// 1 -Introduccion  https://www.youtube.com/watch?v=LKrBvE3yAZo&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=33
//    ipconfig (saber ip)
/*    cd /opt/lampp/mysql/

CREATE DATABASE
SHOW DATABASES
USE PRUEBA
CREATE TABLE DATOSUSUARIOS (NOMBRE VARCHAR(30) , CLAVE VARCHAR(10));
CREATE TABLE DATOSUSUARIOS (NIF VARCHAR(10), EDAD INT(2), NOMBRE VARCHAR(30) , APELLIDO VARCHAR(30) ,CLAVE VARCHAR(10));
ALTER TABLE DATOSUSUARIOS DROP EDAD
ALTER TABLE DATOSUSUARIOS ADD COLUMN EDAD INT(2)
INSERT INTO DATOSUSUARIOS( NIF , EDAD, NOMBRE , APELLIDO ,CLAVE )VALUES("47141521O",43,"JOSE","OJSE","HAMELEIR");
INSERT INTO `datosusuarios2`(`NIF`, `EDAD`, `NOMBRE`, `APELLIDO`, `CLAVE`) VALUES ("4657",44,"JUFTG","HTTTY","OOL")
ALTER TABLE DATOSUSUARIOS DROP EDAD )
SELECT NOMBRE , APELLIDO FROM DATOSUSUARIOS
SELECT * FROM DATOSUSUARIOS
SELECT * FROM DATOSUSUARIOS WHERE NOMBRE='JUAN'


CREATE TABLE IF NOT EXISTS 'PRODUCTOS'(
    'CODIGOARTICULO' VARCHAR(4) DEFAULT NULL,
    'SECCION' VARCHAR(11) DEFAULT NULL,
    'CATEGORIA' VARCHAR(11) DEFAULT NULL,
    'SUBCATEGORIA' VARCHAR(11) DEFAULT NULL,
    'NOMBREARTICULO' VARCHAR(11) DEFAULT NULL,
    'FECHA' VARCHAR(11) DEFAULT NULL,
    'IMPORTADO' VARCHAR(11) DEFAULT NULL,
    'PAISDEORIGEN' VARCHAR(11) DEFAULT NULL,
    'FOTO' VARCHAR(11) DEFAULT NULL,
    'PRECIOCOMPRA' VARCHAR(11) DEFAULT NULL,
    'PESO' VARCHAR(11) DEFAULT NULL,
    'DIMENSIONES' VARCHAR(11) DEFAULT NULL,
    )ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO 'productos' ('CODIGOARTICULO', 'SECCION' , 'CATEGORIA', 'SUBCATEGORIA', 'NOMBREARTICULO', 'FECHA', 'IMPORTADO', 'PAISDEORIGEN', 'FOTO', 'PRECIOCOMPRA, 'PESO', 'DIMENSIONES ) 
VALUES
('AR00', 'SECCION', 'CATEGORIA', 'SUBCATEGORIA', 'NOMBREARTICULO', 'FECHA', 'IMPORTADO', 'PAISDEORIGEN', 'FOTO', 'PRECIOCOMPRA, 'PESO', 'DIMENSIONES )
('AR01', 'SECCION', 'CATEGORIA', 'SUBCATEGORIA', 'NOMBREARTICULO', 'FECHA', 'IMPORTADO', 'PAISDEORIGEN', 'FOTO', 'PRECIOCOMPRA, 'PESO', 'DIMENSIONES ) )
('AR02', 'SECCION', 'CATEGORIA', 'SUBCATEGORIA', 'NOMBREARTICULO', 'FECHA', 'IMPORTADO', 'PAISDEORIGEN', 'FOTO', 'PRECIOCOMPRA, 'PESO', 'DIMENSIONES )
('AR03', 'SECCION', 'CATEGORIA', 'SUBCATEGORIA', 'NOMBREARTICULO', 'FECHA', 'IMPORTADO', 'PAISDEORIGEN', 'FOTO', 'PRECIOCOMPRA, 'PESO', 'DIMENSIONES )
('AR04', 'SECCION', 'CATEGORIA', 'SUBCATEGORIA', 'NOMBREARTICULO', 'FECHA', 'IMPORTADO', 'PAISDEORIGEN', 'FOTO', 'PRECIOCOMPRA, 'PESO', 'DIMENSIONES )
('AR05', 'SECCION', 'CATEGORIA', 'SUBCATEGORIA', 'NOMBREARTICULO', 'FECHA', 'IMPORTADO', 'PAISDEORIGEN', 'FOTO', 'PRECIOCOMPRA, 'PESO', 'DIMENSIONES )
('AR06', 'SECCION', 'CATEGORIA', 'SUBCATEGORIA', 'NOMBREARTICULO', 'FECHA', 'IMPORTADO', 'PAISDEORIGEN', 'FOTO', 'PRECIOCOMPRA, 'PESO', 'DIMENSIONES )
('AR07', 'SECCION', 'CATEGORIA', 'SUBCATEGORIA', 'NOMBREARTICULO', 'FECHA', 'IMPORTADO', 'PAISDEORIGEN', 'FOTO', 'PRECIOCOMPRA, 'PESO', 'DIMENSIONES )
('AR08', 'SECCION', 'CATEGORIA', 'SUBCATEGORIA', 'NOMBREARTICULO', 'FECHA', 'IMPORTADO', 'PAISDEORIGEN', 'FOTO', 'PRECIOCOMPRA, 'PESO', 'DIMENSIONES )
('AR209', 'SECCION', 'CATEGORIA', 'SUBCATEGORIA', 'NOMBREARTICULO', 'FECHA', 'IMPORTADO', 'PAISDEORIGEN', 'FOTO', 'PRECIOCOMPRA, 'PESO', 'DIMENSIONES )

_ CARACTER COMODIN QUE SUSTITUYE A UN CARACTER

% CARACTER COMODIN QUE SUSTITUYE A UNA CADENA DE CARACTERES

SELECT * FROM DATOSUSUARIOS WHERE NOMBRE='JUAN%'  //'%JUAN'// 'J%N'
SELECT * FROM DATOSUSUARIOS WHERE NOMBRE='JUAN_' //'J_AN' // '__AN' 

/////////



https://www.youtube.com/watch?v=awUrlWF38Lc&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=36

https://www.youtube.com/watch?v=lL8_bL24xd4&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=38
https://www.youtube.com/watch?v=VeFxfAIWz6Q&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=39
https://www.youtube.com/watch?v=_3t4NDUQYZU&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=40
https://www.youtube.com/watch?v=kb9aIrCiyE4&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=41
https://www.youtube.com/watch?v=gaJjBm-T7SE&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=42
https://www.youtube.com/watch?v=U3gFWe9tWec&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=43





////////////////
////  MYSQLI  ///
///////////////

////////////////////////////////////////////////

XAMPP   //////////////////

///////////////////////////////////////////
otros:

mysql_install_db -u mysql  Instalar nueva Base de datos

Systemctl unmask mysql.service Desenmascarar 

rm -r /var/lib/mysql*	Eliminar configuracion de bases de datos antiguas

systemctl status mariadb
systemctl status mysql

mysql_secure_installation

/etc/init.d/mysql stop
apt-get remove --purge mariadb*
apt-get autoremove
apt-get autoclean
rm -rf /etc/mysql
rm -rf /var/lib/mysql*
////////////////////////////////////////
////// Pildoras informaticas ////////////
// 1 -Introduccion  https://www.youtube.com/watch?v=LKrBvE3yAZo&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=33
//    ipconfig (saber ip)
/*    cd /opt/lampp/mysql/

USE PRUEBA
CREATE TABLE DATOSUSUARIOS (NOMBRE VARCHAR(30) , CLAVE VARCHAR(10));





////////////////////////////////////////////////

XAMPP   //////////////////

///////////////////////////////////////////

/opt/lampp/lampp start

/opt/lampp/bin/mysql-u root -p 

/opt/lampp/htdocs/www/



?>
</body>
</html>