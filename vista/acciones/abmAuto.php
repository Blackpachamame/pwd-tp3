<?php
$Titulo = "Acción abmAuto - TP4";
include_once("../estructura/cabeceraBT.php");

$datos = data_submitted();
$resp = false;
$objPersona = new AbmPersona();
$objTrans = new AbmAuto();
$filtro= array();
$existePersona= true;
$filtro['NroDni'] = $datos['Duenio'];
//var_dump($filtro);

/* Accion que permite: cargar un nuevo auto, borrar y editar */
if (isset($datos['accion'])) {
    $mensaje = "";
    if ($datos['accion'] == 'editar') {                
        $persona = $objPersona->buscar($filtro);
        //var_dump($persona);
        if ($persona==null) {
            $existePersona=false;
            $mensaje = "<b>ERROR: No existe la persona nueva</b> <br>";
            //echo '<a class="btn btn-primary" href="../ejercicios/nuevaPersona.php" role="button"><i class="fas fa-plus"></i> Agregar persona</a>';

        }
        else{            
            if ($objTrans->modificacion($datos)) {
                $resp = true;
            } else {
                $mensaje = "<b>ERROR: no se modifico </b>";
            }
        }        
        
    }
    if ($datos['accion'] == 'borrar') {
        if ($objTrans->baja($datos)) {
            $resp = true;
        } else {
            $mensaje = "<b>ERROR: </b>";
        }
    }
    if ($datos['accion'] == 'nuevo') {
        if ($objTrans->alta($datos)) {
            $resp = true;
        } else {
            $mensaje = "<b>ERROR: </b>Ya existe un auto con la patente: " . $datos['Patente'] . " o no existe una persona con Dni: " . $datos['Duenio'] . ".<br>";
        }
    }
    if ($resp) {
        $mensaje = "La acción <b>" . $datos['accion'] . " auto</b> se realizo correctamente.";
    } else {
        $mensaje .= "La acción <b>" . $datos['accion'] . " auto</b> no pudo concretarse.";
    }
}

$encuentraError = strpos(strtoupper($mensaje), 'ERROR');
?>

<div class="row">
    <div>
        <?php

        if ($encuentraError > 0) {
            echo "<div class='alert alert-danger d-flex align-items-center mt-5' role='alert'>
            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
            <div>" . $mensaje . "</div></div>";
        } else {
            echo "<div class='alert alert-success d-flex align-items-center mt-5' role='alert'>
            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
            <div>" . $mensaje . "</div></div>";
        }

        ?>
    </div>
</div>

<!-- Botones -->

<div class="mb-5">
<?php  
      if (!$existePersona) {
        echo '<a class="btn btn-primary" href="../ejercicios/nuevaPersona.php" role="button"><i class="fas fa-plus"></i> Agregar persona</a>';

      }
?>
    <a class="btn btn-primary" href="../ejercicios/nuevoAuto.php" role="button"><i class="fas fa-plus"></i> Agregar</a>
    <a class='btn btn-success' href='../ejercicios/cambioDuenio.php' role='button'><i class="fas fa-pen"></i> Modificar</a>
    <a class='btn btn-danger' href='../ejercicios/verAutos.php' role='button'><i class="fas fa-eye"></i> Ver</a>
</div>

<?php
include_once("../estructura/pieBT.php");
?>