<?php
    include "../templates/cabecera.html";
    include "../utils/imprimirResultado.php";
    include "../utils/calculadora.php";
    include "../formularios/formularioDosNum.php";
    
    use function calculadora\calcularDiferencia;
    use function imprimirResultado\crearAlmohadillas;
    use function imprimirResultado\crearAsteriscos;

    echo "<h1>Calculadora de Diferencia</h1>";

    if(isset($_POST["primerNumero"]) && isset($_POST["segundoNumero"])){
        $primerNumero = $_POST["primerNumero"];
        $segundoNumero = $_POST["segundoNumero"];
        if (1 <= $primerNumero && $primerNumero <= 10 &&
             1 <= $segundoNumero && $segundoNumero <= 10){
            $diferencia = calcularDiferencia($primerNumero, $segundoNumero);
            crearAsteriscos($diferencia);
            crearAlmohadillas($diferencia);
        }
        else
            echo "Introduce numeros entre el 1 y 10";
    }

    include "../templates/pie.html";
?>
