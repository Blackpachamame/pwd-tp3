<?php
$Titulo = "Acción abmAuto - TP4";
include_once("../../estructura/cabeceraBT.php");

$datos = data_submitted();
$resp = false;
$objPersona = new AbmPersona();
$objTrans = new AbmAuto();
$filtro = array();
$existePersona = true;
$existeAutito = true;
$filtro['NroDni'] = $datos['Duenio'];
$filtroAuto = array();
$filtroAuto['Patente'] = $datos['Patente'];
$auto = $objTrans->buscar($filtroAuto);


/* ACCIÓN permite: cargar un nuevo auto, borrar y editar */
if (isset($datos['accion'])) {
    $mensaje = "";

    /* ACCIÓN: EDITAR */
    if ($datos['accion'] == 'editar') {
        /* Verificamos que exista la persona */
        $persona = $objPersona->buscar($filtro);
        if ($persona == null) {
            $existePersona = false;
            $mensaje = "<b>ERROR: No existe la persona.</b> <br>";
        } else {
            /* Si la persona existe verificamos que exista el auto */
            $unAuto = $objTrans->buscar($filtroAuto);
            if ($unAuto == null) {
                $existeAutito = false;
                $mensaje = "<b>ERROR: No existe el auto.</b> <br>";
            } else {
                $datos['Marca'] = $auto[0]->getMarca();
                $datos['Modelo'] = $auto[0]->getModelo();
                if ($objTrans->modificacion($datos)) {
                    $resp = true;
                } else {
                    $mensaje = "<b>ERROR: Este auto ya pertenece a ese dueño.</b> <br>";
                }
            }
        }
    }

    /* ACCIÓN: BORRAR */
    if ($datos['accion'] == 'borrar') {
        if ($objTrans->baja($datos)) {
            $resp = true;
        } else {
            $mensaje = "<b>ERROR: </b>";
        }
    }

    /* ACCIÓN: NUEVO */
    if ($datos['accion'] == 'nuevo') {
        // Verificamos que exista la persona /
        $unaPersona = $objPersona->buscar($filtro);
        if ($unaPersona == null) {
            $existePersona = false;
            $mensaje = "<b>ERROR: El dueño del auto no existe.</b> <br>";
        } else {
            // Si la persona existe verificamos que exista el auto */
            $unAuto = $objTrans->buscar($filtroAuto);
            if ($unAuto != null) {
                $mensaje = "<b>ERROR: El auto que desea crear ya existe.</b> <br>";
            } else {
                if ($objTrans->alta($datos)) {
                    $resp = true;
                } else {
                    $mensaje = "<b>ERROR: </b>";
                }
            }
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

    if ($datos['accion'] == 'editar') {
        /* Si no existe la persona muestro un boton para agregar persona, si no existe el auto muestro un boton para agregar auto */
        if (!$existePersona) {
            echo "<a class='btn btn-success' href='../4/nuevaPersona.php' role='button'><i class='fas fa-plus'></i> Agregar persona</a>
            <a class='btn btn-dark' href='../6/cambioDuenio.php' role='button'><i class='fas fa-pen'></i> Modificar</a>";
        } elseif ($existeAutito) {
            echo "<a class='btn btn-dark' href='../6/cambioDuenio.php' role='button'><i class='fas fa-angle-double-left'></i> Regresar</a>";
        }
        if (!$existeAutito && $existePersona) {
            echo "<a class='btn btn-primary' href='../5/nuevoAuto.php' role='button'><i class='fas fa-plus'></i> Agregar autito</a>
            <a class='btn btn-dark' href='../6/cambioDuenio.php' role='button'><i class='fas fa-pen'></i> Modificar</a>";
        }
        echo " ";
        echo "<a class='btn btn-danger' href='../1/verAutos.php' role='button'><i class='fas fa-eye'></i> Ver Autos</a>";
    } elseif ($datos['accion'] == 'nuevo') {
        /* Si no existe la persona muestro un boton para agregar persona, si no existe el auto muestro un boton para agregar auto */
        if (!$existePersona) {
            echo "<a class='btn btn-success' href='../4/nuevaPersona.php' role='button'><i class='fas fa-plus'></i> Agregar persona</a>
            <a class='btn btn-primary' href='../5/nuevoAuto.php' role='button'><i class='fas fa-plus'></i> Agregar autito</a>";
        } elseif ($existeAutito) {
            echo '<a class="btn btn-primary" href="../5/nuevoAuto.php" role="button"><i class="fas fa-plus"></i> Agregar autito</a>';
        }
        if (!$existeAutito && $existePersona) {
            echo "<a class='btn btn-success' href='../6/cambioDuenio.php' role='button'><i class='fas fa-pen'></i> Modificar</a>";
        }
        echo " ";
        echo "<a class='btn btn-danger' href='../1/verAutos.php' role='button'><i class='fas fa-eye'></i> Ver Autos</a>";
    } elseif ($datos['accion'] == 'borrar') {
        echo "<a class='btn btn-primary' href='../5/borrarAuto.php' role='button'><i class='fas fa-angle-double-left'></i> Regresar</a>";
        echo "<a class='btn btn-danger' href='../1/verAutos.php' role='button'><i class='fas fa-eye'></i> Ver Autos</a>";
    }
    ?>

</div>

<?php
include_once("../../estructura/pieBT.php");
?>