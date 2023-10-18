<?php
    namespace imprimirResultado;
    CONST TAG_LI_A = "<li>";
    CONST TAG_LI_C = "</li>";
    CONST TAG_SALTO_LINEA = "<br>";

    function crearAsteriscos($diferencia){
        $index = 1;

        while($index <= $diferencia){
            echo "*";
            $index++;
        }
        echo TAG_SALTO_LINEA;
    }
    
    function crearAlmohadillas($diferencia){
        for ($i=1; $i <= $diferencia; $i++) { 
            echo "#";
        }
        echo TAG_SALTO_LINEA;
    }
    function printearResultado($resultado){
        echo TAG_LI_A."Resultado: ".$resultado.TAG_LI_C;
    }

    function printearTablaMult($resultado, $num){
        for ($i=0; $i < count($resultado); $i++) { 
            echo $num." x ".($i + 1)." = ".$resultado[$i].TAG_SALTO_LINEA;
        }
    }

    function imprimirString($str){
        for ($i=0; $i < strlen($str); $i++) { 
            for ($t=0; $t < strlen($str) - $i; $t++) { 
                echo $str[$t]; 
            }
            echo TAG_SALTO_LINEA;
        }
    }
?>