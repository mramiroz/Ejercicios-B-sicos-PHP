<?php
    namespace calcularCuadrado;

    CONST TABLE_A = "<table id='tabla'>";
    CONST TABLE_C = "</table>";
    CONST TAG_TR_A = "<tr>";
    CONST TAG_TR_C = "</tr>";
    CONST TAG_TD_C = "</td>";
    CONST TAG_TD_A = "<td class='impar'>";
    CONST TAG_TD_A_BLUE = "<td class='par'>";


    function crearCuadrado(int $num){
        $res = 0;
        echo TABLE_A;
        for ($i=1; $i <= $num; $i++) {
            echo TAG_TR_A;
            for($j=1; $j <= $num; $j++){
                $res = $i * $j;
                if($i % 2 == 0)
                    echo TAG_TD_A_BLUE.$res.TAG_TD_C;
                else
                    echo TAG_TD_A.$res.TAG_TD_C;
            }
            echo TAG_TR_C;
        }
        echo TABLE_C;
    }

?>