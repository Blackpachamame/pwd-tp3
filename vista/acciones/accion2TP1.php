<?php
$Titulo = "Acción 2 - TP1";
include_once("../estructura/cabeceraBT.php");
include_once("../../control/control2TP1.php");
?>

<div>
    <?php
    $datos = data_submitted();
    $obj = new control_ej2();
    $respuesta = $obj->verInformacion($datos);
    ?>

    <div class="alert alert-success mt-5" role="alert">
        <?php echo $respuesta ?>
    </div>
</div>

<a class="btn btn-dark mb-5" href="../ejercicios/ejer2TP1.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>

<?php
include_once("../estructura/pieBT.php");
?>