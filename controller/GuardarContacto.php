<!-- JavaScript -->
<script type="text/javascript" src="../js/utils.js"></script> 
<?php
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    $errorUsuario = filter_input(INPUT_POST, 'errorusuario');
    include_once '../model/AbreConexionBBDD.php';
    $resultado_deti = $nombre;
    $query_create = "insert into contactos(nombre, telefono, email, comentario)"
            . " values('$nombre', '$telefono', '$email', '$comentario');";
    
	$query = mysqli_query($con, $query_create);
            
   // $query = mysql_query($query_create, $conexion_db) or die("400");
    
    if($query){
        $errorUsuario = 200;
    }
    else{
        $errorUsuario = 300;
    }
    
    echo"<body onLoad='javascript:volverContacto();'>";
        echo"<form name='contactoreturn' action='../contacto.php' method='post'>";
            echo"<input type='hidden' name='errorusuario' value='$errorUsuario'/> ";
        echo"</form>";
    echo"</body>";
    
    include_once '../model/CierraConexionBBDD.php';
?>