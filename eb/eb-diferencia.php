<?php
    include "../templates/cabecera.html";
    include "../utils/imprimirResultado.php";
    
    use function imprimirResultado\crearAlmohadillas;
    use function imprimirResultado\crearAsteriscos;
    
    echo "<h1>Calculadora de Diferencia</h1>";
    include "../formularios/formularioDosNum.php";    

    if(isset($_POST[PRIMER_NUMERO]) && isset($_POST[SEGUNDO_NUMERO])){
        $primerNumero = $_POST[PRIMER_NUMERO];
        $segundoNumero = $_POST[SEGUNDO_NUMERO];
        if (1 <= $primerNumero && $primerNumero <= 10 &&
             1 <= $segundoNumero && $segundoNumero <= 10){
            $diferencia = $primerNumero - $segundoNumero;
            crearAsteriscos($diferencia);
            crearAlmohadillas($diferencia);
        }
        else
            echo "Introduce numeros entre el 1 y 10";
    }

    include "../templates/pie.html";
?>
