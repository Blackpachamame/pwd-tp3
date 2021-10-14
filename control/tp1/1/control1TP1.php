<?php

class control_ej1
{

    public function verInformacion($datos)
    {
        $numero = $datos['numero'];
        if ($numero > 0) {
            $texto = "El número ingresado es positivo.";
        } elseif ($numero == 0) {
            $texto = "El número ingresado es cero.";
        } else {
            $texto = "El número ingresado es negativo.";
        }

        return $texto;
    }
}
