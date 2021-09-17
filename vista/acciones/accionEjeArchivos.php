<?php
$Titulo = "Acción 1 - TP3";
include_once("../estructura/cabeceraBT.php");
include_once("../../control/controlSubeArchivos.php");

$obj = new controlArchivos();
$infoArchivo = $obj->obtenerInfoDeArchivo($_POST);
$respuesta = $infoArchivo["Descripcion"];
$link = $infoArchivo["link"];
?>


<?php
echo "<div class='alert alert-success mt-5' role='alert'>
 <div class='row px-2 my-3'>
     <div class='col-lg-7 col-xl-8'>$respuesta</div>
     <div class='col-lg-5 col-xl-4 text-lg-end'><img class='img-fluid' alt='Portada' src='" . $link . "'></div>
 </div>
</div>";
?>

<!-- Botones -->
<div class="mb-5">
    <a class="btn btn-dark" href="../home/index.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>
</div>


<?php
include_once("../estructura/pieBT.php");
?>