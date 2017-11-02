<?php
    include_once './init.php';
    $usuario = filter_input(INPUT_POST, 'usuario');
    $errorUsuario = filter_input(INPUT_POST, 'errorusuario');
    $pathAbsolute = filter_input(INPUT_POST, 'pathAbsolute');
    //echo 'url:::'.$pathAbsolute;
    
    if($errorUsuario == 300){
        echo '<p id="usuarioErroneo">El usuario '.$usuario.' no existe, verifique sus datos</p>';
    }
?>
<div class="formAcceso">
        <form id="formuarioAcceso"
              class="form-signin" 
              action="controller/VerificarUsuario.php" 
              method="POST">
            <h2 class="form-signin-heading text-center">Acceso</h2>
            <label for="inputNombre" class="sr-only">Email address</label>
            <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Nombre" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Contrase&ntilde;a" required
                   style="    margin-top: 5px;"
                    />
            <?php
                echo"<input type='hidden' name='pathAbsolute' value='$pathAbsolute'/> ";
            ?>
        
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"/> Recordar
              </label>
            </div>
            <a href="recuperaPassword.php">¿Ha olvidado su contrase&ntilde;a?</a>
            <br/><br/>
            <div class="col-md-6">
                <button class="btn btn-primary btn-block" style="margin-top: 3px;" type="submit">Entrar</button>
            </div>
            <div class="col-md-6">
                <a href="home" class="btn btn-primary btn-block" style="margin-top: 3px;">Volver</a>
            </div>
        </form>
    
 </div>
 
 

    