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
                                    <a href="#" onclick="javascript:enviarFormLocal();">Local</a>
                                </form>
                                
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <form name='loginSendWeb' action="loggin.php" method="POST">
                                    <input type="hidden" name="acceso" value="www"/>
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
