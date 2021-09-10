<?php
$Titulo = "Acción 1 - TP3";
include_once("../estructura/cabeceraBT.php");
include_once("../../control/controlSubeArchivos.php");

$obj = new controlArchivos();
$infoArchivo = $obj->obtenerInfoDeArchivo($_POST);
?>

<div class="row mb-3">
    <div class="col-sm-4 ">
        <?php
        echo $infoArchivo["Observaciones"];
        ?>
    </div>
</div>

<?php
echo "<div class='alert alert-success mt-5' role='alert'>
    <h3>Información</h3>
    <b>Tamaño en KB:</b> " . $infoArchivo["Tamanio"] . "<br />
    <b>Último Acceso:</b> " . $infoArchivo["UltimoAcceso"] . "<br />
    <b>Enlaces:</b> " . $infoArchivo["Enlaces"] . "<br />
    <b>Última modificación:</b> " . $infoArchivo["UltimaModificacion"] . "<br />
    <b>Tipo:</b> " . $infoArchivo["Tipo"] . "<br />
    </div>";
?>

<!-- Botones -->
<div class="mb-5">
    <a class="btn btn-dark" href="../ejercicios/index.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>
</div>


<?php
include_once("../estructura/pieBT.php");
?>