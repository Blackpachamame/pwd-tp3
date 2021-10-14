<?php
$Titulo = "AcciÃ³n 4.1 - TP5";
include_once("../../estructura/cabeceraBT.php");

$datos = data_submitted();
$objAbmUsuario = new AbmUsuario();
$filtro = array();
$filtro['idusuario'] = $datos['userEdit'];
$unUsuario = $objAbmUsuario->buscar($filtro);
?>

<div class="row my-5">
    <form id="accionM_4TP5" method="POST" action="abmUsuario.php">
        <?php
        echo "<div class='table-responsive'>
            <table class='table table-striped'>
                <thead>
                    <tr class='align-middle'>
                        <th scope='col'>Nombre</th>
                        
                        <th scope='col'>Mail</th>      
                        <th class='d-none' scope='col'>#</th> 
                        <th class='d-none' scope='col'>#</th>                 
                        <th class='text-center' scope='col'>Editar</th>
                    </tr>
                </thead>
                <tbody>";
        foreach ($unUsuario as $usuarioEncontrado) {
            $nombre = $usuarioEncontrado->getusnombre();
            $mail = $usuarioEncontrado->getusmail();
            $usdeshabilitado = $usuarioEncontrado->getusdeshabilitado();
            $id = $usuarioEncontrado->getidusuario();
            echo '<tr class="align-middle">';
            echo '<td><input class="w-100" type="text" id="usnombre" name="usnombre" placeholder="Ingrese un nuevo nombre">' . '</td>';
            echo '<td><input class="w-100" type="text" id="usmail" name="usmail" value="' . $mail . '">' . '</td>';
            echo '<td class="d-none"><input id="usdeshabilitado" name="usdeshabilitado" type="hidden" value="' . $usdeshabilitado . '">' . '</td>';
            echo '<td class="d-none"><input id="idusuario" name="idusuario" type="hidden" value="' . $id . '">' . '</td>';
            echo "<td class='text-center'>
                <button class='btn btn-success btn-sm' id='accion' name='accion' value='editar' type='submit'>
                <i class='fas fa-pen'></i></button></td>";
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';

        ?>
    </form>

    <!-- Botones -->
    <div class="mb-5">
        <a class="btn btn-dark" href="listarUsuarios.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>
    </div>
</div>

<?php
include_once("../../estructura/pieBT.php");
?>