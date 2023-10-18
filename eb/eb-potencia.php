<?php
    include "../templates/cabecera.html";
    include "../utils/imprimirResultado.php";
    include "../utils/calculadora.php";
    
    use function calculadora\calcularPotencia;
    use function imprimirResultado\printearResultado;
    
    echo "<h1>Calculadora de Potencia</h1>";
    
    include "../formularios/formularioDosNum.php";
    if(isset($_POST[PRIMER_NUMERO]) && isset($_POST[SEGUNDO_NUMERO])){
        $base = $_POST[PRIMER_NUMERO];
        $exponente = $_POST[SEGUNDO_NUMERO];
        $resultado = calcularPotencia($base, $exponente);
        printearResultado($resultado);
    }

?>