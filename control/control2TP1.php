<?php

class control_ej2
{
    public function verInformacion($datos)
    {
        $array = array($datos["arregloHoras0"], $datos["arregloHoras1"], $datos["arregloHoras2"], $datos["arregloHoras3"], $datos["arregloHoras4"]);
        $sum = 0;
        for ($i = 0; $i < count($array); $i++) {
            $sum = $sum + $array[$i];
        }

        if ($sum == 1) {
            $texto = "La cantidad total de horas de cursada durante la semana es de " . $sum . " hora.";
        } else {
            $texto = "La cantidad total de horas de cursada durante la semana es de " . $sum . " horas.";
        }

        return $texto;
    }
}
