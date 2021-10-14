<?php

class control_ej8
{
    public function verInformacion($datos)
    {
        $edad = $datos["edad"];
        $estudiante = $datos["estudiante"];
        if ($estudiante == "si") {
            if ($edad >= 12) {
                $texto = "El precio de la entrada es de $180.";
            } elseif ($edad < 12) {
                $texto = "El precio de la entrada es de $160.";
            }
        } elseif ($edad < 12) {
            $texto = "El precio de la entrada es de $160.";
        } else {
            $texto = "El precio de la entrada es de $300.";
        }
        return $texto;
    }
}
