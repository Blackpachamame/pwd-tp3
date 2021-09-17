<?php
$Titulo = "Acción 3 - TP2";
include_once("../estructura/cabeceraBT.php");
include_once("../../control/control3TP2.php");

$datos = data_submitted();
$obj = new control_tp2_ej3();
$respuesta = $obj->verInformacion($datos);
?>

<div class="row mb-3">
    <div class="col-sm-12 ">
        <?php
        if ($respuesta) {
            echo "<div class='alert alert-success mt-5' role='alert'>Sesión Iniciada.</div>";
        } else {
            echo "<div class='alert alert-danger mt-5' role='alert'>Datos Incorrectos.</div>";
        }
        ?>
        <!-- Botones -->
        <div class="mb-5">
            <a class="btn btn-dark" href="../ejercicios/ejer3TP2.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>
        </div>
    </div>
</div>

<?php
include_once("../estructura/pieBT.php");
?>