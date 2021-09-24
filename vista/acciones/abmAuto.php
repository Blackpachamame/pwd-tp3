<?php
include_once '../../configuracion.php';
include_once("../estructura/cabeceraBT.php");
$datos = data_submitted();
// Accion que permite: cargar un nuevo auto, borrar y editar 
//verEstructura($datos);
$resp = false;
$objTrans = new AbmAuto();
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

    <h2>Nuevo Auto</h2>
    


    <?php
    echo $mensaje;
    ?>
    <br>
    <br>
    <a class="btn btn-dark mb-5" href="../ejercicios/verAutos.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>

</body>

</html>