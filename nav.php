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
            <a href="index.php">
                <img alt="Brand" img src="img/lastmonkey.gif" class="imgCoorp hidden-xs">
            </a>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand visible-xs" href="index.php">Last Monkey</a>
                <!--
                visible-xs  visible en movil
                hidden-xs visible en web
                -->
            </div>
            <div style="color: white; text-align: center;">
                <?php
                    if(isset($_POST['usuario'])){
                    $_SESSION['usuario'] = $_POST['usuario'];
                    //echo $url_Adminstracion;
                    //include_once './robocam.php';
                }else {
                    if(isset($_SESSION['usuario'])){
                        //echo $url_Adminstracion;
                        //include_once './robocam.php';
                      }else{
                            //echo $url_Contacto;
                          //include_once './section.php';
                      }
                }
            
            if (isset($_SESSION['usuario'])){
                //echo '<p>Sesion iniciada:'.$_SESSION['usuario'].' ';
                //echo '<a href="controller/FinSession.php">Cerrar sesion</a></p>';
                echo '<form style="margin-bottom: -29px;"  action="controller/FinSession.php" method="POST">';
                echo "<input type='hidden' name='pathAbsolute' value='$pathAbsolute'/> ";
                echo '<button id ="btnCerrarSession" class="btn-success" type="submit">Cerrar sesion</button>';
                echo '</form>';
            }
                ?>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-bottom: 5px;">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accesos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <form name='loginSendLocal' action="loggin.php" method="POST">
                                    <input type="hidden" name="acceso" value="local"/>
                                    <input type="hidden" name="pathAbsolute" value='<?php echo $pathAbsolute; ?>'/>
                                    <a href="#" onclick="javascript:enviarFormLocal();">Local</a>
                                </form>
                                
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <form name='loginSendWeb' action="loggin.php" method="POST">
                                    <input type="hidden" name="acceso" value="www"/>
                                    <input type="hidden" name="pathAbsolute" value='<?php echo $pathAbsolute; ?>'/>
                                    <a href="#" onclick="javascript:enviarFormWeb();">Web WWW</a>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
