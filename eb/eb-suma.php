<?php
    include "../templates/cabecera.html";
    include "../utils/imprimirResultado.php";
    include "../utils/calculadora.php";
    
    use function calculadora\sumarNumerosNaturales as sumar;
    use function imprimirResultado\printearResultado;
    
    echo "<h1>Suma hasta limite</h1>";
    
    include "../formularios/formularioUnNum.php";
    if(isset($_POST[NUMERO_INPUT])){
        $limite = $_POST[NUMERO_INPUT];
        $resultado = sumar($limite);
        printearResultado($resultado);
    }else{
        echo "Introduce Limite";
    }
    include "../templates/pie.html";
?>