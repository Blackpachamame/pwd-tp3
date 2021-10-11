<?php
include_once '../../configuracion.php';

$sesion = new Session();
$datos = data_submitted();

if (!$sesion->activa()) {
    header('Location: login.php');
} else {
    $Titulo = "Pagina Segura 4.2 - TP5";
    include_once("../estructura/cabeceraBT.php");
}
?>

<div class="row my-5">
    <form class="mb-5" id="pagSeg_4TP5" name="pagSeg_4TP5" method="POST" action="../ejercicios/cerrarSesion.php">
        <div class="d-flex justify-content-center">
            <div class='card text-center border border-3 border-warning' style='width: 25rem;'>
                <div class='card-body my-3'>
                    <?php
                    echo "<h3 class='card-title'>BIENVENID@ {$_SESSION['usnombre']}</h3>";
                    ?>
                    <div class="text-center">
                        <img alt="homer" class="mb-2 w-50" src="../img/cosmefulanito.png">
                    </div>
                    <button href='#' class='btn btn-primary' id='cerrarSesion' name='cerrarSesion' type='submit' value='cerrarSesion'>Cerrar sesión</button>
                </div>
            </div>
        </div>
    </form>
</div>



<?php
include_once("../estructura/pieBT.php");
?>