<?php

$Titulo = "Ejercicio 2 - TP4";
include_once("../estructura/cabeceraBT.php");

$objAbmTabla = new AbmAuto();
$listaTabla = $objAbmTabla->buscar(null);
?>

<h2 class="mt-5">Buscar Auto</h2>
<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text">Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean convenientes en caso de que no se encuentre ningún auto con la patente ingresada.</p>
        <p class="card-text">Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
    </div>
</div>

<form class="row" id="tp4_eje2" name="tp4_eje2" method="POST" action="../acciones/accionBuscarAuto.php">
    <div class="col-7 col-lg-6 col-xl-4">
        <div class="input-group mb-5">
            <input type="text" class="form-control" name="Patente" id="Patente" placeholder="Ingrese una patente" aria-label="Ingrese una patente" aria-describedby="patente" required>
            <button class="btn btn-primary" type="submit" id="Patente">Buscar</button>
        </div>
    </div>
</form>

<?php
include_once("../estructura/pieBT.php");
?>