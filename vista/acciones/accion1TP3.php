<?php
$Titulo = "Acción 1 - TP3";
include_once("../estructura/cabeceraBT.php");
include_once("../../control/controlSubeArchivos.php");

//$datos = data_submitted();
$obj = new controlArchivos();
$mensaje = $obj->control_tp3_ej1();
$link = $mensaje['archivo']['link'];
$error = $mensaje['archivo']['error'];
?>

<div class="row mb-3">
    <div class="col-sm-12 ">
        <?php
        if ($error == "") {
            echo "<div class='alert alert-success mt-5' role='alert'>
            <p><h4>Información</h4>
                    Ruta archivo: $link <br>
                    <a href=" . $link . ">Ver archivo</a> <br>  
                   </p>
            </div>";
        } else {
            echo "<div class='alert alert-danger mt-5' role='alert'>$error</div>";
        }
        ?>
        <!-- Botones -->
        <div class="mb-5">
            <a class="btn btn-dark" href="../ejercicios/ejer1TP3.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>
        </div>
    </div>
</div>

<?php
include_once("../estructura/pieBT.php");
?>