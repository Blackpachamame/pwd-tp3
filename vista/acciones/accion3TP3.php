<?php
$Titulo = "Acción 3 - TP3";
include_once("../estructura/cabeceraBT.php");
include_once("../../control/controlSubeArchivos.php");

$obj = new controlArchivos();
$mensaje = $obj->control_tp3_ej3();
$link = $mensaje['imagen']['link'];
$error = $mensaje['imagen']['error'];

$obj2 = new controlArchivos();
$respuesta = $obj2->verInformacion($_POST);
?>

<div class="row mb-3">
    <div class="col-sm-12 ">
        <?php
        if ($error == "") {
            echo "<div class='alert alert-success mt-5' role='alert'>
                    <div class='row px-2 my-3'>
                        <div class='col-lg-7 col-xl-8'>$respuesta</div>
                        <div class='col-lg-5 col-xl-4 text-lg-end'><img class='img-fluid' alt='Portada' src='" . $link . "'></div>
                    </div>
                  </div>";
        } else {
            echo "<div class='alert alert-danger mt-5' role='alert'>$error</div>";
        }
        ?>
        <!-- Botones -->
        <div class="mb-5">
            <a class="btn btn-dark" href="../ejercicios/ejer3TP3.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>
            <a class='btn btn-success' href='../home/index.php' role='button'>Ver Más <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
</div>

<?php
include_once("../estructura/pieBT.php");
?>