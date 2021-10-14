<?php
include_once '../../../configuracion.php';
include_once '../../../control/tp5/general/AbmUsuario.php';
include_once '../../../modelo/Usuario.php';
include_once '../../../modelo/conector/BaseDatos.php';

$datos = data_submitted();
$sesion = new Session();
$sesion->iniciar($datos['usnombre'], ($datos['uspass']));
list($valido, $error) = $sesion->validar();

if ($valido) {
    header("Location:paginaSegura.php");
} else {
    $sesion->cerrar();
    header("Location:login.php?error=" . urlencode($error));
}
