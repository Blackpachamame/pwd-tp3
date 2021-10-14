<?php
include_once '../../../configuracion.php';
include_once '../../../control/tp5/general/AbmUsuario.php';
include_once '../../../modelo/Usuario.php';
include_once '../../../modelo/conector/BaseDatos.php';

$datos = data_submitted();
$sesion = new Session();
$name = md5($datos['usnombre']);
$pass = md5($datos['uspass']);
$sesion->iniciar($name, $pass);
list($valido, $error) = $sesion->validar();

if ($valido) {
    header("Location:paginaSegura.php");
} else {
    $sesion->cerrar();
    header("Location:login.php?error=" . urlencode($error));
}
