<?php
    include "../templates/cabecera.html";
    include "../utils/imprimirResultado.php";
    include "../utils/calculadora.php";
    
    use function calculadora\calcularPotencia;
    use function imprimirResultado\printearResultado;
    
    echo "<h3>Pedir dos números A y B y calcular la potencia A elevado a B utilizando iteraciones (no una función matemática predefinida).</h3>";
    
    include "../formularios/formularioDosNum.php";
    if(isset($_POST["primerNumero"]) && isset($_POST["segundoNumero"])){
        $base = $_POST["primerNumero"];
        $exponente = $_POST["segundoNumero"];
        $resultado = calcularPotencia($base, $exponente);
        printearResultado($resultado);
    }

?>