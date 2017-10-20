<?php
    include_once './init.php';
?>
<div id="formContacto">
    <form id="formularioDeContacto">
        <h2>Contacto</h2>
        <label>Nombre</label>
        <input class="form-control" type="text" placeholder="Ingrese el nombre" name="nombre" required/>
        <label>Teléfono</label>
        <input class="form-control" type="number" placeholder="Ingese su teléfono" name="telefono"/>
        <label>Email</label>
        <input class="form-control" type="email" placeholder="Ingrese su email" name="email" required/>
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