<?php

    include_once '../utils/LastMonkeyConstantes.php';
    $query = "create database IF NOT EXISTS " . $db_name.";";
    
    $conn = new mysqli($url, $user, $password);
    
    if (!$conn) {
    	die ("No conecta a la BBDD");
    } else {
    	printf("Conecta. ");
    }
    
    if ($conn->query($query)===TRUE) {
    	printf ("La base de datos se ha creado correctamente.");
    } else {
    	printf ("La bbdd existe o hay un error.");
    }
    
    $con = mysqli_connect($url ,$user, $password, $db_name) or die("No se puede conectar");
    if (mysqli_query($con, $tabla_contactos)==TRUE) {
    	echo "La tabla contactos se ha creado.";
    } else {
    	echo "No se ha creado la tabla contactos.";
    }
    
    if (mysqli_query($con, $tabla_usuarios)==TRUE) {
    	echo "La tabla usuarios se ha creado.";
    } else {
    	echo "No se ha creado la tabla usuarios.";
    }
    
    if (mysqli_query($con, $tabla_accesos)==TRUE) {
    	echo "La tabla acceso se ha creado.";
    } else {
    	echo "No se ha creado la tabla acceso.";
    }
    
    
    $conn->close();
    
    /*
    $con = mysqli_connect("localhost",$user,$password,"lastmonkey") or die("No se puede conectar");
    
    if ($con) {
    	echo "-- Se ha conectado a la bbdd -- ";
    }
    */
    /*
    if (mysqli_query($con, $query) === TRUE) {
    	printf(" -- Se ha creado la bbdd: " . $db_name);
    } else {
    	printf("La bbdd " .$db_name." ya existe!");
    }
    */
    /*
    if (mysqli_query($con, $tabla_contactos) === TRUE) {
    	printf("La tabla contactos se ha creado correctamente.");
    } else {
    	printf("La tabla contactos ya existe.".$tabla_contactos);
    }
    */
/*
    include_once '../utils/LastMonkeyConstantes.php';
    $slq = 'create database '.$db_name;
    $conexion_crearModelo = mysqli_connect($url, $user, $password);
    if(mysqli_query($slq, $conexion_crearModelo)){
        echo 'La base de datos '.$db_name.' se cre&oacute; correctamente. ';
    }
    else{
        echo 'Error al crear la base de datos: '. mysql_error().". ";
    }

    $crear_tabla = @mysql_db_query($db_name,$tabla_contactos, $conexion_crearModelo) or die(mysql_error());
    if($crear_tabla){
        echo 'La tabla contactos se ha creado!. ';
    }else
    {
        echo 'NO SE HA PODIDO CREAR LA TABLA. ';
    }
    
    $crear_tabla = @mysql_db_query($db_name, $tabla_usuarios, $conexion_crearModelo) or die(mysql_error());
    if($crear_tabla){
        echo 'La tabla usuarios se ha creado!. ';
    }else
    {
        echo 'NO SE HA PODIDO CREAR LA TABLA';
    }
    
    $crear_tabla = @mysql_db_query($db_name, $tabla_accesos, $conexion_crearModelo) or die(mysql_error());
    if($crear_tabla){
        echo 'La tabla accesos se ha creado!. ';
    }else
    {
        echo 'NO SE HA PODIDO CREAR LA TABLA';
    }
    */
?>