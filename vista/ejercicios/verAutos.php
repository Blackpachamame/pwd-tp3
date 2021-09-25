<?php
$Titulo = "Ejercicio 1 - TP4";
include_once("../estructura/cabeceraBT.php");

$objAbmTabla = new AbmAuto();
$listaTabla = $objAbmTabla->buscar(null);
?>

<h2 class="mt-5">ABM - Autos</h2>
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title border-bottom">Consigna</h4>
    <p class="card-text">Crear una pagina php “VerAutos.php”, en ella usando la capa de control correspondiente mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido. En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay autos cargados.</p>
  </div>
</div>

<div class="row mb-5" id="tp4_eje1">
  <!-- Boton Agregar Auto -->
  <div class="mb-2 d-flex justify-content-end">
    <a class="btn btn-primary" href="../ejercicios/nuevoAuto.php" role="button"><i class="fas fa-plus"></i> Nuevo Auto</a>
  </div>
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
          echo '<tr class="align-middle">';
          echo '<th scope="row">' . $i . '</th>';
          echo '<td>' . $objTabla->getPatente() . '</td>';
          echo '<td>' . $objTabla->getMarca() . '</td>';
          echo '<td>' . $objTabla->getModelo() . '</td>';
          echo '<td>' . $dniDu . '</td>';
          echo '<td class="text-center"><a href="cambioDuenio.php" class="btn btn-success btn-sm" role="button"><i class="fas fa-pen"></i><a/>
          <a href="eliminarPersona.php" class="btn btn-danger btn-sm disabled" role="button"><i class="fas fa-trash-alt"></i><a/></td>';
          echo '</tr>';
          $i++;
        }
        echo '</tbody>';
        echo '</table>';
      } else {
        echo "<div class='alert alert-success d-flex align-items-center mt-5' role='alert'>
        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
        <div>ERROR: No se encontraron autos en la Base de Datos.</div>
        </div>";
      }

      ?>
  </div>
</div>

<?php
include_once("../estructura/pieBT.php");
?>