<?php
$Titulo = "Ejercicio 4 - TP4";
include_once("../../estructura/cabeceraBT.php");
?>

<h2 class="mt-5">Nueva Persona</h2>
<div class="card mb-5">
	<div class="card-body">
		<h4 class="card-title border-bottom">Consigna</h4>
		<p class="card-text">Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
	</div>
</div>

<form id="tp4_eje4" name="tp4_eje4" method="POST" action="abmPersona.php" data-toggle="validator">
	<div class="row mx-md-3 justify-content-center justify-content-md-start">
		<!-- Nombre -->
		<div class="col-sm-8 col-md-6 mb-3">
			<label for="Nombre" class="control-label">Nombre</label>
			<input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Escriba su nombre completo" required>
		</div>
		<!-- Apellido -->
		<div class="col-sm-8 col-md-6 mb-3">
			<label for="Apellido">Apellido</label>
			<input type="text" class="form-control" name="Apellido" id="Apellido" placeholder="Escriba su apellido completo" required>
		</div>
		<!-- Dni -->
		<div class="col-sm-8 col-md-6 col-lg-4 mb-3">
			<label for="NroDni">Dni</label>
			<input type="number" class="form-control" name="NroDni" id="NroDni" placeholder="11111111" required>
		</div>
		<!-- Fecha Nacimiento -->
		<div class="col-sm-8 col-md-6 col-lg-4 mb-3">
			<label for="fechaNac">Fecha Nacimiento</label>
			<input type="text" class="form-control" name="fechaNac" id="fechaNac" placeholder="1999-01-01" required>
		</div>
		<!-- Teléfono -->
		<div class="col-sm-8 col-md-6 col-lg-4 mb-3">
			<label for="Telefono">Teléfono</label>
			<input type="text" class="form-control" name="Telefono" id="Telefono" placeholder="299-9999999" required>
		</div>
		<!-- Domicilio -->
		<div class="col-sm-8 col-md-12 mb-3">
			<label for="Domicilio">Domicilio</label>
			<textarea class="form-control" name="Domicilio" id="Domicilio" placeholder="Escriba su domicilio" required></textarea>
		</div>
	</div>
	<!-- accion = nuevo (input oculto) -->
	<input id="accion" name="accion" value="nueva" type="hidden">
	<!-- Botón enviar -->
	<div class="text-center mb-5">
		<input class="btn btn-danger btn-lg" id="btn_t4_eje4b" name="btn_t4_eje4b" type="reset" value="Limpiar">
		<input class="btn btn-primary btn-lg" id="btn_t4_eje4" name="btn_t4_eje4" type="submit" value="Enviar">
	</div>
</form>

<?php
include_once("../../estructura/pieBT.php");
?>