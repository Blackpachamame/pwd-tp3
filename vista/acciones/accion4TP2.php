<?php
$Titulo = "Acción 4 - TP2";
include_once("../estructura/cabeceraBT.php");
include_once("../../control/control4TP2.php");
?>

<div>
    <?php
    $datos = data_submitted();
    $obj = new control_tp2_ej4();
    $respuesta = $obj->verInformacion($datos);
    ?>
    <div class="alert alert-success mt-5" role="alert">
        <?php echo $respuesta ?>
    </div>
</div>

<a class="btn btn-dark mb-5" href="../ejercicios/ejer4TP2.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>

<?php
include_once("../estructura/pieBT.php");
?>