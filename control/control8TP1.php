<?php

class control_ej8
{
    public function verInformacion($datos)
    {
        $edad = $datos["edad"];
        $estudiante = $datos["estudiante"];
        if ($estudiante == "si") {
            if ($edad >= 12) {
                $texto = "El precio de la entrada es 180 pesos.";
            } elseif ($edad < 12) {
                $texto = "El precio de la entrada es 160 pesos.";
            }
        } else {
            $texto = "El precio de la entrada es 300 pesos.";
        }
        return $texto;
    }
}
