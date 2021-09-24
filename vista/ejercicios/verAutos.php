<?php
$Titulo = "Ejercicio 1 - TP4";
include_once("../estructura/cabeceraBT.php");

$objAbmTabla = new AbmAuto();
$listaTabla = $objAbmTabla->buscar(null);
?>

<h2 class="mt-5">ABM - Autos</h2>
<div class="card mb-5">
  <div class="card-body">
    <h4 class="card-title border-bottom">Consigna</h4>
    <p class="card-text">Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean convenientes en caso de que no se encuentre ningún auto con la patente ingresada.</p>
    <p class="card-text">Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
  </div>
</div>

<div class="row mb-5" id="tp4_eje1">
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="">#</th>
          <th scope="col">Patente</th>
          <th scope="col">Marca</th>
          <th scope="col">Modelo</th>
          <th scope="col">Dueño</th>
          <th scope="col" class="text-center">ABM</th>
        </tr>
      </thead>
      <?php

      if (count($listaTabla) > 0) {
        $i = 1;
        echo '<tbody>';
        foreach ($listaTabla as $objTabla) {
          $dniDu = $objTabla->getDniDuenio();
          echo '<tr>';
          echo '<th scope="row">' . $i . '</th>';
          echo '<td>' . $objTabla->getPatente() . '</td>';
          echo '<td>' . $objTabla->getMarca() . '</td>';
          echo '<td>' . $objTabla->getModelo() . '</td>';
          echo '<td>' . $dniDu . '</td>';
          echo '<td class="text-center"><a href="CambioDuenio.php"><button type="button"  class="btn btn-success btn-sm"><i class="fas fa-pen"></i></button><a/>
          <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>';
          echo '</tr>';
          $i++;
        }
        echo '</tbody>';
        echo '</table>';
      }

      ?>
  </div>
</div>

<?php
include_once("../estructura/pieBT.php");
?>