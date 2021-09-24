<?

$titulo = "Nueva persona";

?>
<h3>Tabla</h3>

<form method="post" action="../acciones/abmPersona.php">
	<label>DNI</label><br />
	<input id="ddni" name="dni" type="number" required>
	<br />
	<label>Apellido</label><br />
	<input id="apellido" name="apellido" type="text">
	<br />
	<label>Nombre</label><br />
	<input id="Nombre" name="Nombre" type="text">
	<br />
	<label>fecha nacimiento</label><br />
	<input id="fechaNac" name="fechaNac" type="text">
	<br />
	<label>Telefono</label><br />
	<input id="telefono" name="telefono" type="number">
	<br />
	<label>domicilio</label><br />
	<input id="domicilio" name="domicilio" type="text">


	<input id="accion" name="accion" value="nuevo" type="hidden">

	<input type="submit">



</form>
<br><br>
<a href="listarPersonas.php">Volver</a>
</body>

</html>