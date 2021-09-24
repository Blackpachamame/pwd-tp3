<?php
include_once '../../configuracion.php';
include_once("../estructura/cabeceraBT.php");

$datos = data_submitted();
//verEstructura($datos);
// Accion que permite: cargar un nuevo auto, borrar y editar 
$resp = false;
$objTrans = new AbmPersona();
if (isset($datos['accion'])) {
    if ($datos['accion'] == 'editar') {
        if ($objTrans->modificacion($datos)) {
            $resp = true;
        }
    }
    if ($datos['accion'] == 'borrar') {
        if ($objTrans->baja($datos)) {
            $resp = true;
        }
    }
    if ($datos['accion'] == 'nuevo') {
        if ($objTrans->alta($datos)) {
            $resp = true;
        }
    }
    if ($resp) {
        $mensaje = "La accion " . $datos['accion'] . " se realizo correctamente.";
    } else {
        $mensaje = "La accion " . $datos['accion'] . " no pudo concretarse.";
    }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <title>Ejemplo</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
   <h2>nueva perosona</h2>

    <?php
    echo $mensaje;
    ?>
    <a class="btn btn-dark mb-5" href="../ejercicios/listarPersonas.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>

</body>

</html>