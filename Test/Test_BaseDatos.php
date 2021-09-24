<?php 
include_once '../configuracion.php';

$objBd = new BaseDatos();
echo "<br>----------------------------------------------------------------------------------<br>";
echo "<br>----------------------------------------------------------------------------------<br>";
///////////////////////////////
///    PROBANDO INSERTAR   ///
/////////////////////////////

$sql = "INSERT INTO tabla(descrip)  VALUES('dato de prueba');";
$res = $objBd->Ejecutar($sql);

if($res){
    echo "<br> El Registro se inserto.";
    if($res>0){
        echo "<br> El id del campo autoincrement insertado es:".$res;
        $id = $res;
    }else{
        echo " <br>La tabla no tiene un campo autoincrement.";
    }
    
} else {
    echo "<br>No fue posible realizar la operacion.";
}
echo "<br>----------------------------------------------------------------------------------<br>";

$sql = "INSERT INTO tablasinsecuencia(id,descrip)  VALUES(2,'dato de prueba sin secuencia');";
$res = $objBd->Ejecutar($sql);
if($res){
    echo "<br> El Registro se inserto.";
    if($res>0){
        echo "<br> El id del campo autoincrement insertado es:".$res;
    }else{
        echo "<br> La tabla no tiene un campo autoincrement.";
    }
    
} else {
    echo "No fue posible realizar la operacion.";
}
echo "<br>----------------------------------------------------------------------------------<br>";

///////////////////////////////
///    PROBANDO ACTUALIZAR   ///
/////////////////////////////
$sql = "update tabla set descrip = 'campo modificado88' WHERE id=".$id;
$res = $objBd->Ejecutar($sql);
if($res>-1){    
    if($res>0){
        echo "<br> La cantidad de registros afectados por la operacion fueron :".$res;
    }else{
        echo "<br> No han sido afectados registros en la actualizacion.";
    }
    
} else {
    echo "<br>No fue posible realizar la operacion.";
}


echo "<br>----------------------------------------------------------------------------------<br>";

///////////////////////////////
///    PROBANDO ELIMINAR   ///
/////////////////////////////
$sql = "DELETE FROM tabla  WHERE id=".$id;
$res = $objBd->Ejecutar($sql);
if($res>-1){
    if($res>0){
        echo "<br> La cantidad de registros afectados por la operacion fueron :".$res;
    }else{
        echo "<br> No han sido afectados registros en la actualizacion.";
    }
    
} else {
    echo "<br>No fue posible realizar la operacion.";
}

echo "<br>----------------------------------------------------------------------------------<br>";
echo "<br>----------------------------------------------------------------------------------<br>";


///////////////////////////////
///    PROBANDO Select   ///
/////////////////////////////
$sql = "SELECT * FROM tabla ";
$res = $objBd->Ejecutar($sql);
if($res>-1){
    if($res>0){
        echo "<br> La cantidad de registros encontrados por la operacion fueron :".$res;
        while ($reg = $objBd->Registro()){
            echo "<pre>";
            print_r($reg);
            echo "</pre>";
        }
        
    }else{
        echo "<br> No han encontrado registros.";
    }
    
} else {
    echo "<br>No fue posible realizar la operacion.";
}

echo "<br>----------------------------------------------------------------------------------<br>";
echo "<br>----------------------------------------------------------------------------------<br>";



?>