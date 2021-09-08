<?php
$Titulo = "Acción 3 - TP1";
include_once("../estructura/cabeceraBT.php");
include_once("../../control/control3TP1.php");
?>

<div>
    <?php
    $datos = data_submitted();
    $obj = new control_ej3();
    $respuesta = $obj->verInformacion($datos);
    ?>

    <div class="alert alert-success mt-5" role="alert">
        <?php echo $respuesta ?>
    </div>
</div>

<a class="btn btn-dark mb-5" href="../ejercicios/ejer3TP1.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>

<?php
include_once("../estructura/pieBT.php");
?>