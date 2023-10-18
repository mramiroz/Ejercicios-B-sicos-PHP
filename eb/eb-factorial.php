<?php
    include "../templates/cabecera.html";
    include "../utils/calculadora.php";
    include "../utils/imprimirResultado.php";
    
    use function calculadora\calcularPotencia;
    use function imprimirResultado\printearResultado;
    use function calculadora\calcularFactorial;
    
    echo "<h3>Pedir un número X y calcular su factorial utilizando iteraciones.</h3>";
    include "../formularios/formularioUnNum.php";

    if(isset($_POST["numeroInput"])){
        $res = calcularFactorial($_POST["numeroInput"]);
        printearResultado($res);
    }else
        echo "Introduce un numero";
    include "../templates/pie.html";

?>