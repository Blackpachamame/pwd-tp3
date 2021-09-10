<?php

class control_ej4
{
    public function verificarEdad($datos)
    {
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        //$direccion = $datos['direccion'];
        $texto = "";
        if ($edad >= 18)
            $texto =  " Soy mayor de edad.";
        else
            $texto = " NO soy mayor de edad.";

        return $texto;
    }
}
