<?php
    include "../templates/cabecera.html";
    include "../utils/calculadora.php";
    include "../utils/imprimirResultado.php";

    use function imprimirResultado\printearResultado;
    use function calculadora\calcularFactorial;
    
    echo "<h1>Calculadora de Factorial</h1>";
    include "../formularios/formularioUnNum.php";

    if(isset($_POST[NUMERO_INPUT])){
        $res = calcularFactorial($_POST[NUMERO_INPUT]);
        printearResultado($res);
    }else
        echo "Introduce un numero";
    include "../templates/pie.html";

?>