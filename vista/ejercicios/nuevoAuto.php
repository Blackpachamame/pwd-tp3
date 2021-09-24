<?
include_once("../estructura/cabeceraBT.php");
$Titulo = "Ejercicio 4 - TP4-Nueva persona";
?>


<h2>Ingresar una Nueva Auto</h2>

<form method="post" action="../acciones/abmAuto.php">
	<label>Patente</label><br />
	<input id="Patente" name="Patente" type="text" required>
	<br />
	<label>Marca</label><br />
	<input id="Marca" name="Marca" type="text">
	<br />
	<label>Modelo</label><br />
	<input id="Modelo" name="Modelo" type="number">
	<br />
	<label>Dni de el propietario</label><br />
	<input id="DniDuenio" name="DniDuenio" type="text">
	<br />
	<input id="accion" name="accion" value="nuevo" type="hidden">

	<input type="submit">



</form>
<br><br>
<a href="verAutos.php">Volver</a>
</body>

</html>

<?php
include_once("../estructura/pieBT.php");
?>