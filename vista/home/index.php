<?php
$Titulo = "Inicio";
include_once("../estructura/cabeceraBT.php");
include_once("../../control/controlSubeArchivos.php");
$obj = new controlArchivos();
$arreglo = $obj->obtenerArchivos();
?>


<div class="text-center mb-5">
    <div class="mt-3 mb-3">
        <img alt="Programación Web Dinámica" class="mt-3 mb-3" src="../img/logoPWD2.png" width="25%">
        <h2 class="mt-2"><strong>Programación Web Dinámica</strong></h2>
        <h5 class="mb-3">HTML - CSS - JAVASCRIPT - BOOSTRAP</h5>
    </div>
</div>

<h2>Lista de películas</h2>

<form id="ejeArchivos" name="ejeArchivos" method="POST" action="../acciones/accionEjeArchivos.php">
    <div class="row">
        <?php
        foreach ($arreglo as $archivo) {
            if (strlen($archivo) > 2 && strpos($archivo, "txt") <= 0  && strpos($archivo, "pdf") <= 0) {
                echo    "<div id='pelis' class='d-grid col-lg-2 col-sm-4 mb-4'>
                            <img class='img-fluid' alt='$archivo' src='../../uploads/$archivo' width='100%'>
                            <div class='d-grid align-items-end'>
                                <input type='submit' name='Seleccion:$archivo' id='Seleccion:$archivo' class='btn btn-primary' value='Ver detalles'>
                            </div>
                        </div>";
            }
        }
        ?>
    </div>
</form>

<div class="row">
    <div class="col-sm-12 mb-5">
        <a class="btn btn-danger" href="ejer3TP3.php" role="button">Agregar película <i class="fas fa-angle-double-right"></i></a>
    </div>
</div>


<?php
include_once("../estructura/pieBT.php");
?>