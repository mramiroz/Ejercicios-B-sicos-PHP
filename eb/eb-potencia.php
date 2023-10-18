<?php
    include "../templates/cabecera.html";
    include "../utils/imprimirResultado.php";
    include "../utils/calculadora.php";
    
    use function calculadora\calcularPotencia;
    use function imprimirResultado\printearResultado;
    
    echo "<h1>Calculadora de Potencia</h1>";
    
    include "../formularios/formularioDosNum.php";
    if(isset($_POST["primerNumero"]) && isset($_POST["segundoNumero"])){
        $base = $_POST["primerNumero"];
        $exponente = $_POST["segundoNumero"];
        $resultado = calcularPotencia($base, $exponente);
        printearResultado($resultado);
    }

?>