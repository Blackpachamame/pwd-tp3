<?php

include_once '../../configuracion.php';
$objLogin = new Session();
if ($objLogin->activa()) {
    header('location:paginaSegura.php');
} else {
    $Titulo = "Ejercicio 4.2 - TP5";
    include_once("../estructura/cabeceraBT.php");
}
/*$datos = data_submitted();
if (isset($datos['error'])) {
    if ($datos['error'] == 1) {
        $mensaje = "Error. Usuario y/o contraseña incorrectos.";
    }
}*/

?>
<div class="row my-5">
    <form class="form-signin" id="login_4TP5" name="login_4TP5" method="POST" action="../acciones/verificarLogin.php">
        <div class="login mx-auto">
            <h1 class="h3 mb-3 text-center">Usuario</h1>
            <div class="form-group">
                <div class="input-group mt-3">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    <input class="form-control" type="text" id="usnombre" name="usnombre" placeholder="Nombre de usuario" aria-label="username" aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mt-3">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    <input class="form-control" type="password" id="uspass" name="uspass" placeholder="Contraseña" aria-label="password" aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="d-grid mb-5 mt-3">
                <button class="btn btn-primary" type="submit">Iniciar sesión</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once("../estructura/pieBT.php");
?>