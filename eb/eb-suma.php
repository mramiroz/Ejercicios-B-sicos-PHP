<?php
    include "../templates/cabecera.html";
    include "../utils/imprimirResultado.php";
    include "../utils/calculadora.php";
    
    use function calculadora\sumarNumerosNaturales as sumar;
    use function imprimirResultado\printearResultado;
    
    echo "<h3>Pedir un número X y calcular la suma de los X primeros números naturales (1 + 2 + 3 + …).</h3>";
    
    include "../formularios/formularioUnNum.php";
    if(isset($_POST["numeroInput"])){
        $limite = $_POST["numeroInput"];
        $resultado = sumar($limite);
        printearResultado($resultado);
    }else{
        echo "Introduce Limite";
    }
    include "../templates/pie.html";
?>