<?php
$Titulo = "Ejercicio 7 - TP4";
include_once("../../estructura/cabeceraBT.php");

$objAbmTabla = new AbmAuto();
$listaTabla = $objAbmTabla->buscar(null);
?>

<h2 class="mt-5">Buscar Persona</h2>
<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text">Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php” busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
    </div>
</div>

<form class="row mb-5" id="tp4_eje7" name="tp4_eje7" method="POST" action="accionBuscarPersona.php">
    <div class="col-8 col-lg-6 col-xl-4">
        <div class="input-group">
            <input type="text" class="form-control" name="NroDni" id="NroDni" placeholder="Ingrese nro de Dni" aria-label="Ingrese nro de Dni" aria-describedby="dni" required>
            <button class="btn btn-primary" type="submit" id="NroDni">Buscar</button>
        </div>
    </div>
</form>

<?php
include_once("../../estructura/pieBT.php");
?>