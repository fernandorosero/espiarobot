<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>The Last Monkey</title>
        <?php
            include_once './init.php';
        ?>
    </head>
    <body>
        <?php
            include_once './nav.php';
        ?>
        
        <?php
        
            if(isset($_POST['usuario'])){
                    $_SESSION['usuario'] = $_POST['usuario'];
                    //echo $url_Adminstracion;
                    include_once './robocam.php';
                }else {
                    if(isset($_SESSION['usuario'])){
                        //echo $url_Adminstracion;
                        include_once './robocam.php';
                      }else{
                            //echo $url_Contacto;
                          include_once './section.php';
                      }
                }
            
            if (isset($_SESSION['usuario'])){
                echo '<p>Sesion iniciada:'.$_SESSION['usuario'].'';
                echo '<p><a href="controller/FinSession.php">Cerrar sesion</a></p>';
            }
            else{
                echo 'no session';
            }
        ?>
        
        <?php
            
        ?>
        <?php
            
        ?>
        <?php
            include_once './footer.php';
        ?>
    </body>
</html>