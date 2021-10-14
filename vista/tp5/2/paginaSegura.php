<?php
include_once '../../../configuracion.php';
include_once '../../../control/tp5/general/AbmUsuario.php';
include_once '../../../control/tp5/general/AbmUsuarioRol.php';
include_once '../../../modelo/Usuario.php';
include_once '../../../modelo/UsuarioRol.php';
include_once '../../../modelo/conector/BaseDatos.php';
include_once '../../../modelo/Rol.php';

$sesion = new Session();
$datos = data_submitted();

if (!$sesion->activa()) {
    header('Location: login.php');
} else {
    list($sesionValidar, $error) = $sesion->validar();
    if ($sesionValidar) {
        $user = $sesion->getUsuario();
        $name = $user->getusnombre();
        $mail = $user->getusmail();
        $usrol = $sesion->getRol();
        $rol = $usrol[0]->getobjrol();
        $descrp = $rol->getroldescripcion();
        $Titulo = "Pagina Segura 4.2 - TP5";
        include_once("../../estructura/cabeceraBT.php");
    } else {
        header('Location: cerrarSesion.php');
    }
}
?>

<div class="row my-5">
    <form class="mb-5" id="pagSeg_4TP5" name="pagSeg_4TP5" method="POST" action="cerrarSesion.php">
        <div class="d-flex justify-content-center">
            <div class='card text-center border border-3 border-warning' style='width: 25rem;'>
                <div class='card-body my-3'>
                    <?php
                    echo "<h3 class='card-title'>BIENVENID@ objetoUsuario</h3>";
                    echo "Email: $mail" . "<br>";
                    echo "Rol: $descrp" . "<br>";
                    if ($descrp == "Admin") {
                        echo "<div class='text-center'>
                        <img alt='homer' class='mb-2 w-50' src='../../img/imgAdmin.png'>
                        </div>";
                    } else {
                        echo "<div class='text-center'>
                        <img alt='homer' class='mb-2 w-50' src='../../img/imgProle.png'>
                        </div>";
                    }
                    ?>
                    <button href='#' class='btn btn-primary' id='cerrarSesion' name='cerrarSesion' type='submit' value='cerrarSesion'>Cerrar sesión</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include_once("../../estructura/pieBT.php");
?>