<?php
    $parametroVista = $_GET["acceso"];
    echo 'El parametro es:'.$parametroVista;

    include_once './init.php';
?>

<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form class="form-signin">
        <h2 class="form-signin-heading text-center">Acceso</h2>
        <label for="inputNombre" class="sr-only">Email address</label>
        <input type="text" id="inputNombre" class="form-control" placeholder="Nombre" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contrase&ntilde;a" required
               style="    margin-top: 5px;"
                >
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordar
          </label>
        </div>
        <a href="recuperaPassword.php">¿Ha olvidado su contrase&ntilde;a?</a>
        <br/><br/>
        
        <div class="col-md-6">
            <a href="index.php" class="btn btn-primary btn-block" style="margin-top: 3px;">Cancelar</a>
        </div>
        <div class="col-md-6">
            <button class="btn btn-primary btn-block" style="margin-top: 3px;" type="submit">Entrar</button>
        </div>
        
      </form>
    </div>
 </div> <!-- /container -->
 
 

    