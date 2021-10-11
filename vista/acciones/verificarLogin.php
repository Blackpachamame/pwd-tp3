<?php
include_once '../../configuracion.php';

$datos = data_submitted();
$sesion = new Session();
$sesion->iniciar($datos['usnombre'], md5($datos['uspass']));
$valido = $sesion->validar();

if ($valido) {
    header("Location:../ejercicios/paginaSegura.php");
} else {
    $sesion->cerrar();
    header("Location:../ejercicios/login.php?error=1");
}


// $Titulo = "Verifica pass";
// include_once("../estructura/cabeceraBT.php");

// $datos = data_submitted();
// $AmbUser = new AbmUsuario();
// $sesion = new Session();
// $unuserman = new Usuario();
// //var_dump($sesion);
// $user = $datos['usnombre'];
// $psw = $datos['uspass'];

// $sesion->iniciar($user, $psw);
// $valida = $sesion->validar();


// $mensaje = "";
// if ($valida) {
//     $unuserman = $sesion->getUsuario();
//     $mensaje = "LOGIN Exitoso: Usuario y contraseña correctas";
//     header("location:../../paginaSegura.php");
// } else {
//     $mensaje = "LOGIN fail: Usuario y contraseña incorrectas";
//     header("location:../ejercicios/login.php");
// }
