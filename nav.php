<?php
    $host= $_SERVER["HTTP_HOST"];
    $url= $_SERVER["REQUEST_URI"];
    $pathAbsolute = "http://" . $host . $url;
    //echo $pathAbsolute;
?>
<a href="#abajo" id="arriba" class="arriba" ></a>
<div id="navMenu">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <a href="home">
                <img alt="Brand" src="img/lastmonkey.gif" class="imgCoorp hidden-xs animated fadeInRight" />
            </a>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="textoNavMovil" class="navbar-brand visible-xs animated fadeInRight" href="index.php">Last Monkey</a>
                <!--
                visible-xs  visible en movil
                hidden-xs visible en web
                -->
            </div>
            <div style="color: white; text-align: center;">
                <?php
                    if(isset($_POST['usuario'])){
                        $_SESSION['usuario'] = $_POST['usuario'];
                    }
            
                    if (isset($_SESSION['usuario'])){
                        echo '<form id="formularioCerrarSession" action="controller/FinSession.php" method="POST">';
                        echo "<input type='hidden' name='pathAbsolute' value='$pathAbsolute'/> ";
                        echo '<button id="btnCerrarSession" class="btn btn-success btn-xs" type="submit">Cerrar sesion</button>';
                        echo '</form>';
                    }
                ?>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="contacto.php">Contacto</a>
                    </li>
                    <li>
                        <a href="loggin.php">Acceso</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
