<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>Robot Espía</title>
        <!-- Estilos -->
        <link rel="stylesheet" type="text/css" href="css/espiarobot.css"/>
        
        <!-- JavaScript -->
        <script src="js/roto.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- jQuery -->
        <script src="js/jquery-2.1.4.min.js"></script>
        
        
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        
    </head>
    <body onload="javascript:Inicializacion();">
        <div id="contenedor">
            <div id="imagen">
                <?php
                    $ipRaspberry = "http://192.168.0.161:8081";
                    echo '<img id="imgImagen" src="'.$ipRaspberry.'"/>';
                ?>
            </div>
            <div id="cuerpo">
                <div id="botonera">
                    <table id="tablaBotonera">
                        <tr>
                            <td>
                                <button class="btn btn-danger"
                                        id="click-up"
                                        onclick="javascript:CambiaUpDown(1);">
                                    Arriba
                                </button>
                            </td>

                            <td>
                                <button class="btn btn-danger"
                                        id="click-left"
                                        onclick="javascript:CambiaLeftRight(1);">
                                    Izquierda
                                </button>
                            </td>

                            <td>
                                <button class="btn btn-danger"
                                        id="click-right"
                                        onclick="javascript:CambiaLeftRight(-1);">
                                    Derecha
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger"
                                        id="click-down"
                                        onclick="javascript:CambiaUpDown(-1);">
                                    Abajo
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="mandoControl">
                    <div>
                        <input type="hidden" id="servoUPDOWN" value=""/>
                        <input type="hidden" id="servoLR" value=""/>
                    </div>
                    <table>
                        <tr>
                            <td></td>
                            <td>
                                <button class="btn btn-success btn-lg glyphicon glyphicon-arrow-up"
                                        id="click-delante"
                                        onclick="javascript:Adelante();"></button>

                            </td>
                            <td></td>
                        </tr>
                            <tr>
                            <td>
                                <button class="btn btn-primary btn-lg glyphicon glyphicon-arrow-left"
                                        id="click-izquierda"
                                        onclick="javascript:Izquierda();"></button>
                            </td>
                            <td>
                                <button id="click-stop" class="btn btn-danger btn-lg glyphicon glyphicon-remove-sign"
                                        onclick="javascript:Stop();"></button>
                            </td>
                            <td>
                                <button id="click-derecha" class="btn btn-primary btn-lg glyphicon glyphicon-arrow-right"
                                        onclick="javascript:Derecha();"></button>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button id="click-atras" class="btn btn-success btn-lg glyphicon glyphicon-arrow-down"
                                        onclick="javascript:Atras();"></button>
                            </td>
                            <td></td>
                        </tr>
                    </table>

                   <!-- Contendor, que muestra la salida (Distancia)  -->


            </div>
            </div>
        </div>
    </body>
</html>