
  
    <div id="contenedor">
        <div id="imagen">
            <?php
                $ipRaspberry = "http://192.168.0.161:8081";
                echo '<img id="imgImagen" src="'.$ipRaspberry.'"/>';
                $ipRaspberry1 = "http://lastmonkey.sytes.net:8081";
                echo '<img id="imgImagen1" src="'.$ipRaspberry1.'"/>';
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
                                    id="click-adelante"
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
            </div>
        </div>
    </div>
