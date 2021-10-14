<?php
$Titulo = "Acción 1 - TP1";
include_once("../../estructura/cabeceraBT.php");
include_once("../../../control/tp1/1/control1TP1.php");

$datos = data_submitted();
$obj = new control_ej1();
$respuesta = $obj->verInformacion($datos);

echo "<div class='alert alert-primary d-flex align-items-center mt-5' role='alert'>
        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Info:'><use xlink:href='#info-fill'/></svg>
        <div>" . $respuesta . "</div></div>";
?>

<a class="btn btn-dark mb-5" href="ejer1TP1.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>

<?php
include_once("../../estructura/pieBT.php");
?>