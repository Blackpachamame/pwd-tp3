<?php
$Titulo = "Acción 2 - TP3";
include_once("../estructura/cabeceraBT.php");
include_once("../../control/controlSubeArchivos.php");

$obj = new controlArchivos();
$mensaje = $obj->control_tp3_ej2();
$link = $mensaje['texto']['link'];
$error = $mensaje['texto']['error'];

$obj2 = new controlArchivos();
$contenidoTxt = $obj2->obtenerContenido();
?>

<div class="row mb-3">
    <div class="col-sm-12 ">
        <?php
        if ($error == "") {
            echo "<div class='alert alert-success mt-5' role='alert'>
            <h3>Información</h3>
                    <b><em>Archivo subido correctamente</em></b><br />
                    <b>Ruta archivo:</b> $link <br />
                    <a href=" . $link . ">Ver texto</a><br />
            </div>";
            echo "<div class='mb-3'><textarea class='form-control'>" . $contenidoTxt["Descripcion"] . "</textarea></div>";
        } else {
            echo "<div class='alert alert-danger mt-5' role='alert'>$error</div>";
        }
        ?>
        <!-- Botones -->
        <div class="mb-5">
            <a class="btn btn-dark" href="../ejercicios/ejer2TP3.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>
        </div>
    </div>
</div>

<?php
include_once("../estructura/pieBT.php");
?>