<?php
    include "../templates/cabecera.html";
    echo "<h1>Multiplos de 3 y 5 del 1 al 1000</h1>";
    CONST TOPE = 20;
    CONST TAG_LI_O = "<li>";
    CONST TAG_LI_C = "</li>";
    for ($i=1; $i <= 1000; $i++) { 
        if($i % 3 == 0 && $i % 5 == 0)
            echo "<li>$i</li>";
    }

    echo "<h2>Primeros 20 multiplos</h2>";
    $count = 0;
    for ($i=1; $i < 1000; $i++) { 
        if($i % 3 == 0 && $i % 5 == 0){
            echo TAG_LI_O.$i.TAG_LI_C;
            $count++;
        }
        if($count == TOPE)
            break;
    }
    include "../templates/pie.html";
?>