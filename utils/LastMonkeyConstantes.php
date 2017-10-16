<?php

    $db_name="lastmonkey";
    
    $tabla_contactos="CREATE TABLE IF NOT EXISTS contactos "
            . "(id_contacto integer unsigned NOT NULL auto_increment, "
            . "nombre varchar(30) NOT NULL, "
            . "telefono int(11) NOT NULL, "
            . "email varchar(50) NOT NULL, "
            . "comentario varchar(200) NOT NULL, "
            . "PRIMARY KEY (id_contacto));";
    
    $tabla_usuarios="CREATE TABLE IF NOT EXISTS usuarios "
            . "(id_usuario integer unsigned not null auto_increment,"
            . "usuario varchar(30) not null, "
            . "password varchar (20) not null, "
            . "primary key (id_usuario));";
    
    $tabla_accesos="CREATE TABLE IF NOT EXISTS accesos "
            . "(id_acceso integer unsigned not null auto_increment,"
            . "acceso varchar(30) not null, "
            . "puerto varchar (20) not null, "
            . "uri varchar(30)  not null,"
            . "primary key (id_acceso));";
    
    /*Local*/
    $url = "localhost";
    $user = "root";
    $password = "4545";
    
    /*Produccion
    $url="localhost";
    $user="";
    $password="";
    */
?>


