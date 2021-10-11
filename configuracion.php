<?php

//header('Content-Type: text/html; charset=utf-8');
//header ("Cache-Control: no-cache, must-revalidate ");

/////////////////////////////
// CONFIGURACION APP//
/////////////////////////////

$PROYECTO = 'PWD-TP3';

// Variable que almacena el directorio del proyecto
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/$PROYECTO/";

include_once($ROOT . 'util/funciones.php');


// Variable que define la página de autenticación del proyecto
$INICIO = "Location:http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/vista/ejercicios/login.php";

// Variable que define la página principal del proyecto (menú principal)
$PRINCIPAL = "Location:http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/index.php";


$_SESSION['ROOT'] = $ROOT;
