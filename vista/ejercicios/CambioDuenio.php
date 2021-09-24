<?php
$Titulo = "Ejercicio 1 - TP4";
include_once("../estructura/cabeceraBT.php");

$objAbmTabla = new AbmAuto();
$listaTabla = $objAbmTabla->buscar(null);
?>

<h2 class="mt-5">CAmbio De dueño</h2>
<div class="card mb-5">
  <div class="card-body">
    <h4 class="card-title border-bottom">Consigna</h4>
    <p class="card-text">Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean convenientes en caso de que no se encuentre ningún auto con la patente ingresada.</p>
    <p class="card-text">Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
  </div>
</div>


<form method="post" action="../acciones/abmAuto.php">
	<label>Patente</label><br />
	<input id="Patente" name="Patente" type="text" required>
	<br />	
	<label>Dni de el propietario Actual</label><br />
	<input id="DniDuenio" name="DniDuenio" type="text">
	<br />
    <label>Dni de el propietario nuevo</label><br />
	<input id="Dnicambio" name="Dnicambio" type="text">
	<br />
	<input id="accion" name="accion" value="editar" type="hidden">

	<input type="submit">

</form>


<?php
include_once("../estructura/pieBT.php");
?>