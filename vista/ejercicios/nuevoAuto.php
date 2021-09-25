<?php
$Titulo = "Ejercicio 5 - TP4";
include_once("../estructura/cabeceraBT.php");
?>

<h2 class="mt-5">Nuevo Auto</h2>
<div class="card mb-5">
	<div class="card-body">
		<h4 class="card-title border-bottom">Consigna</h4>
		<p class="card-text">Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
	</div>
</div>

<form id="tp4_eje5" name="tp4_eje5" method="POST" action="../acciones/abmAuto.php" data-toggle="validator">
	<div class="row mx-md-3 justify-content-center">
		<!-- Patente -->
		<div class="col-sm-8 col-md-6 col-lg-3 mb-3">
			<label for="Patente" class="control-label">Patente</label>
			<input type="text" class="form-control" name="Patente" id="Patente" placeholder="AAA 000" required>
		</div>
		<!-- Marca -->
		<div class="col-sm-8 col-md-6 col-lg-3 mb-3">
			<label for="Marca">Marca</label>
			<input type="text" class="form-control" name="Marca" id="Marca" placeholder="Fiat Palio" required>
		</div>
		<!-- Modelo -->
		<div class="col-sm-8 col-md-6 col-lg-3 mb-3">
			<label for="Modelo">Modelo</label>
			<input type="number" class="form-control" name="Modelo" id="Modelo" min="10" max="2021" placeholder="2000" required>
		</div>
		<!-- Dni -->
		<div class="col-sm-8 col-md-6 col-lg-3 mb-3">
			<label for="DniDuenio">Dni</label>
			<input type="number" class="form-control" name="DniDuenio" id="DniDuenio" placeholder="11111111" required>
		</div>
	</div>
	<!-- accion = nuevo (input oculto) -->
	<input id="accion" name="accion" value="nuevo" type="hidden">
	<!-- Botón enviar -->
	<div class="text-center mt-3 mb-5">
		<input class="btn btn-danger btn-lg" id="btn_t4_eje5b" name="btn_t4_eje5b" type="reset" value="Limpiar">
		<input class="btn btn-primary btn-lg" id="btn_t4_eje5" name="btn_t4_eje5" type="submit" value="Enviar">
	</div>
</form>

<?php
include_once("../estructura/pieBT.php");
?>