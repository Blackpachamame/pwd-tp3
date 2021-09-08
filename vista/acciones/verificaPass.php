<?php
$Titulo = "Acción 3 - TP2";
include_once("../estructura/cabeceraBT.php");
include_once("../../control/control3TP2.php");
?>

<div>
    <?php
    $datos = data_submitted();
    $obj = new control_tp2_ej3();
    $respuesta = $obj->verInformacion($datos);
    ?>

    <div class="alert alert-success mt-5" role="alert">
        <?php echo $respuesta ?>
    </div>
</div>

<a class="btn btn-dark mb-5" href="../ejercicios/ejer3TP2.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>

<?php
include_once("../estructura/pieBT.php");
?>