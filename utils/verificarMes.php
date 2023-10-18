<?php
    namespace verificarMes;

    function imprimirMes($mesElegido, $bisiesto){
        $mesesDias =[
            "enero" => 31,
            "febrero" => ($bisiesto == "si") ? 29 : 28,
            "marzo" => 31,
            "abril" => 30,
            "mayo" => 31,
            "junio" => 30,
            "julio" => 31,
            "agosto" => 31,
            "septiembre" => 30,
            "octubre" => 31,
            "noviembre" => 30,
            "diciembre" => 31,
        ];
        if(array_key_exists($mesElegido, $mesesDias)){
            echo "<p>El mes $mesElegido tiene ".$mesesDias[strtolower($mesElegido)]." días. </p>";
            echo "<p>El año es " . (($bisiesto == "si") ? "bisiesto." : "no bisiesto.") . "</p>";
        }
        else {
            echo "Introduce un mes válido";
        }
    }
?>