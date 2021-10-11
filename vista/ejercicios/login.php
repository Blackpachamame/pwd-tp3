<?php
$Titulo = "Ejercicio 4.2 - TP5";
include_once("../estructura/cabeceraBT.php");
?>

<h3>Usuario</h3>

<form method="post" action="../acciones/verificarLogin.php">

    <input id="idusuario" name="idusuario" type="hidden" value=null>

    <label>Nombre</label><br />
    <input id="usnombre" name="usnombre" width="80" type="text" required><br /> <br />

    <label>Pass</label><br />
    <input id="uspass" name="uspass" width="80" type="number" required><br /> <br />

    <label>Mail</label><br />
    <input id="usmail" name="usmail" width="80" type="text" required><br /> <br />


    <input id="accion" name="accion" value="nuevo" type="hidden">
    <input type="submit">
</form>
<br><br>
<a href="listarUsuario.php">Volver</a>