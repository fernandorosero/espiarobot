<?php
    include_once './init.php';
    $errorUsuario = filter_input(INPUT_POST, 'errorusuario');
    if($errorUsuario == 300){
        echo '<p id="usuarioErroneo">No se ha podido guardar la informaci&oacute;n.</p>';
    }
    elseif ($errorUsuario == 200) {
        echo '<p id="usuarioOk">La informaci&oacute;n se ha guardado correctamente.</p>';
    
    }
?>
<div id="formContacto">
    <form id="formularioDeContacto" action="controller/GuardarContacto.php" method="POST">
        <h2>Contacto</h2>
        <label>Nombre</label>
        <input class="form-control" type="text" placeholder="Ingrese el nombre" name="nombre" required/>
        <label>Teléfono</label>
        <input class="form-control" type="number" placeholder="Ingese su teléfono" name="telefono"/>
        <label>Email</label>
        <input class="form-control" type="email" placeholder="Ingrese su email" name="email" required/>
        <input type="hidden" name="errorusuario"/>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Comentario</label>
            <textarea name="comentario" placeholder="Ingrese su comentario" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div id="botoneraFormContacto">
            <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
            <a href="index.php" class="btn btn-primary btn-sm">Cancelar</a>
        </div>
    </form>
</div>