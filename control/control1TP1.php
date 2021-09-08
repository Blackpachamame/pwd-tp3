<?php

class control_ej1  {

    public function verInformacion($datos){
        $numero = $datos['numero'];
        if($numero > 0){
            $texto = "El numero ingresado es positivo.";
        }elseif ($numero == 0){
            $texto = "El numero ingresado es cero.";
        }else{
            $texto = "El numero ingresado es negativo.";
        }
     // print_r($datos);
     return $texto;
    }

}
?>