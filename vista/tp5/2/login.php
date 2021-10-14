<?php
include_once '../../../configuracion.php';

$objLogin = new Session();
if ($objLogin->activa()) {
    header('location:paginaSegura.php');
} else {
    $Titulo = "Ejercicio 4.2 - TP5";
    include_once("../../estructura/cabeceraBT.php");
}

$datos = data_submitted();

?>
<div class="row my-5">
    <form class="form-signin" id="login_4TP5" name="login_4TP5" method="POST" action="verificarLogin.php">
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
            <div class="d-grid my-3">
                <button class="btn btn-primary" type="submit">Iniciar sesión</button>
            </div>
            <?php
            if (isset($datos['error'])) {
                $mensaje = $datos['error'];
                echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>
                <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                <div>$mensaje</div></div>";
            }
            ?>
        </div>
    </form>
</div>

<?php
include_once("../../estructura/pieBT.php");
?>