<?php
include_once("../../../configuracion.php");

$datos = data_submitted();
if ($datos['accion'] == 'noAccion') {
    header('Location: listarUsuarios.php');
}

$Titulo = "Acción abmUsuario - TP5";
include_once("../../estructura/cabeceraBT.php");

$resp = false;
$abmUser = new AbmUsuario();

$userDelete = new AbmUsuario();
$filtro = array();
$filtro['idusuario'] = $datos['idusuario'];
$user = $userDelete->buscar($filtro);
$objUsuario = $user[0];

/* Accion que permite: cargar una nueva usuario, borrar y editar */
if (isset($datos['accion'])) {
    $mensaje = "";
    if ($datos['accion'] == 'editar') {
        $datos['usnombre'] = md5($datos['usnombre']);
        if ($abmUser->modificacion($datos)) {
            $resp = true;
        } else {
            $mensaje = "<b>ERROR: </b>";
        }
    }
    if ($datos['accion'] == 'deshabilitar') {
        $datos['usnombre'] = $objUsuario->getusnombre();
        $datos['uspass'] = $objUsuario->getuspass();
        $datos['usmail'] = $objUsuario->getusmail();
        if ($objUsuario->getusdeshabilitado()) {
            $datos['usdeshabilitado'] = 0;
        } else {
            $datos['usdeshabilitado'] = 1;
        }
        if ($userDelete->modificacion($datos)) {
            $resp = true;
        } else {
            $mensaje = "<b>ERROR: </b>";
        }
    }
    if ($datos['accion'] == 'nueva') {
        if ($objUsuario->alta($datos)) {
            $resp = true;
        } else {
            $mensaje = "<b>ERROR:</b> Ya existe una usuario con el Dni: " . $datos['iduser'] . ".<br>";
        }
    }
    if ($resp) {
        $mensaje = "La acción <b>" . $datos['accion'] . " usuario</b> se realizo correctamente.";
    } else {
        $mensaje .= "La acción <b>" . $datos['accion'] . " usuario</b> no pudo concretarse.";
    }
}


$encuentraError = strpos(strtoupper($mensaje), 'ERROR');
?>

<div class="row mb-5">
    <div>
        <?php
        if ($mensaje != "") {
            if ($encuentraError > 0) {
                echo "<div class='alert alert-danger d-flex align-items-center mt-5' role='alert'>
                    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                    <div>" . $mensaje . "</div>
                </div>";
            } else {
                echo "<div class='alert alert-success d-flex align-items-center mt-5' role='alert'>
                    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
                    <div>" . $mensaje . "</div>
                </div>";
            }
        }
        ?>
    </div>

    <!-- Botones -->
    <div class="mb-5">
        <a class='btn btn-danger' href='listarUsuarios.php' role='button'><i class="fas fa-eye"></i> Ver Usuarios</a>
    </div>
</div>

<?php
include_once("../../estructura/pieBT.php");
?>