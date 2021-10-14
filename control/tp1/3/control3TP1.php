<?php

class control_ej3
{
    public function verInformacion($datos)
    {
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];

        if ($edad == 1) {
            $texto = "¡Hola! soy " . $nombre . " " . $apellido . ", tengo " . $edad . " año y vivo en " . $direccion . ".";
        } else {
            $texto = "¡Hola! soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años y vivo en " . $direccion . ".";
        }

        return $texto;
    }
}
