<?php
$Titulo = "Verifica pass";
include_once("../estructura/cabeceraBT.php");

$datos = data_submitted();
$AmbUser = new AbmUsuario();
$sesion = new Session();
var_dump($sesion);
$user = $datos['usnombre'];
$psw = $datos['uspass'];
$sesion->iniciar($user, $psw);
$valida = $sesion->validar();


$listaUser = $AmbUser->buscar($datos);
$mensaje = "";
if ($valida) {
    $mensaje = "LOGIN Exitoso: Usuario y contraseña correctas";
    header("location:../ejercicios/paginaSegura.php");
} else {
    $mensaje = "LOGIN fail: Usuario y contraseña incorrectas";
    header("location:../ejercicios/login.php");
}
