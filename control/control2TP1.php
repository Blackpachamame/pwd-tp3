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
        $texto = "La cantidad total de horas de cursada durante la semana es de: " . $sum . " hrs.";

        return $texto;
    }
}
