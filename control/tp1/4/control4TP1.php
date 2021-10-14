<?php

class control_ej4
{
    public function verificarEdad($datos)
    {
        $edad = $datos['edad'];
        $texto = "";
        if ($edad >= 18) {
            $texto =  " Soy mayor de edad.";
        } else {
            $texto = " NO soy mayor de edad.";
        }
        return $texto;
    }
}
