<?php
$Titulo = "Ejercicio 4.1 - TP5";
include_once("../estructura/cabeceraBT.php");

$objAbmTabla = new AbmUsuario();
$listaTabla = $objAbmTabla->buscar(null);
?>

<h2 class="mt-5">Listar Usuarios</h2>
<div class="card mb-4">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text">Un script Vista/listarUsuario.php que liste los usuario registrados y permita actualizar sus datos o realizar un borrado lógico. Las acciones que se van a poder invocar son: accion/actualizarLogin.php y accion/eliminarLogin.php.</p>
    </div>
</div>


<div class="row mb-5" id="tp4_eje3">
    <!-- Boton Agregar Usuario -->
    <div class="mb-2 d-flex justify-content-end">
        <a class="btn btn-primary disabled" href="../ejercicios/nuevoUsuario.php" role="button"><i class="fas fa-plus"></i> Nuevo Usuario</a>
    </div>

    <form id="Duenio" name="autosPersona" action="../acciones/actualizarLogin.php" method="post">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Mail</th>
                        <th scope="col" class="text-center">Editar</th>
                    </tr>
                </thead>
                <?php

                if (count($listaTabla) > 0) {
                    $i = 1;
                    echo '<tbody>';
                    foreach ($listaTabla as $objUsuario) {
                        $id = $objUsuario->getidusuario();
                        echo '<tr class="align-middle">';
                        echo '<th scope="row">' . $i . '</th>';
                        echo '<td>' . $objUsuario->getusnombre() .    '</td>';
                        echo '<td>' . $objUsuario->getusmail() .  '</td>';
                        echo '<td class="text-center"><button class="btn btn-success btn-sm" type="submit" value="' . $id . '" id="userEdit" name="userEdit" role="button"><i class="fas fa-pen"></i></button>
                        <button class="btn btn-danger btn-sm" type="submit" value="' . $id . '" formaction="../acciones/eliminarLogin.php" id="userDelete" name="userDelete" role="button"><i class="fas fa-trash-alt"></i></button></td>';
                        echo '</tr>';
                        $i++;
                    }
                    echo '</tbody>';
                    echo '</table>';
                }

                ?>

        </div>
    </form>
</div>

<?php
include_once("../estructura/pieBT.php");
?>