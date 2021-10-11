<?php
include_once '../../configuracion.php';
include_once '../../control/AbmUsuario.php';
include_once '../../modelo/Usuario.php';
include_once '../../modelo/conector/BaseDatos.php';

$datos = data_submitted();
$sesion = new Session();
$sesion->iniciar($datos['usnombre'], ($datos['uspass']));
$valido = $sesion->validar();

if ($valido) {
    header("Location:../ejercicios/paginaSegura.php");
} else {
    $sesion->cerrar();
    header("Location:../ejercicios/login.php?error=1");
}
