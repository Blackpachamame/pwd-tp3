<?php
$Titulo = "Ejercicio 6 - TP4";
include_once("../estructura/cabeceraBT.php");

$objAbmTabla = new AbmAuto();
$listaTabla = $objAbmTabla->buscar(null);
?>

<h2 class="mt-5">Cambio de Dueño</h2>
<div class="card mb-5">
	<div class="card-body">
		<h4 class="card-title border-bottom">Consigna</h4>
		<p class="card-text">Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
	</div>
</div>

<form id="tp4_eje6" name="tp4_eje6" method="POST" action="../acciones/abmAuto.php" data-toggle="validator">
	<div class="row mx-md-3 justify-content-center">
		<!-- Patente -->
		<div class="col-sm-8 col-lg-4 mb-3">
			<label for="Patente" class="control-label">Patente</label>
			<input type="text" class="form-control" name="Patente" id="Patente" placeholder="AAA 000" required>
		</div>
		<!-- Dni Dueño Nuevo -->
		<div class="col-sm-8 col-lg-4 mb-3">
			<label for="Duenio">Dni propietario nuevo</label>
			<input type="number" class="form-control" name="Duenio" id="Duenio" placeholder="99999999" required>
		</div>
	</div>
	<!-- accion = editar (input oculto) -->
	<input id="accion" name="accion" value="editar" type="hidden">
	<!-- Botón enviar -->
	<div class="text-center mt-3 mb-5">
		<input class="btn btn-danger btn-lg" id="btn_t4_eje6b" name="btn_t4_eje6b" type="reset" value="Limpiar">
		<input class="btn btn-primary btn-lg" id="btn_t4_eje6" name="btn_t4_eje6" type="submit" value="Enviar">
	</div>
</form>

<?php
include_once("../estructura/pieBT.php");
?>