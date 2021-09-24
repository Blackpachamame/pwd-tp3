<?
include_once("../estructura/cabeceraBT.php");
$Titulo = "Ejercicio 4 - TP4-Nueva persona";
?>


<h2>Ingresar una Nueva Persona</h2>

<form method="post" action="../acciones/abmPersona.php">
	<label>DNI</label><br />
	<input id="NroDni" name="NroDni" type="number" required>
	<br />
	<label>Apellido</label><br />
	<input id="Apellido" name="Apellido" type="text">
	<br />
	<label>Nombre</label><br />
	<input id="Nombre" name="Nombre" type="text">
	<br />
	<label>fecha nacimiento</label><br />
	<input id="fechaNac" name="fechaNac" type="text">
	<br />
	<label>Telefono</label><br />
	<input id="Telefono" name="Telefono" type="number">
	<br />
	<label>domicilio</label><br />
	<input id="Domicilio" name="Domicilio" type="text">


	<input id="accion" name="accion" value="nuevo" type="hidden">

	<input type="submit">



</form>
<br><br>
<a href="listarPersonas.php">Volver</a>
</body>

</html>

<?php
include_once("../estructura/pieBT.php");
?>