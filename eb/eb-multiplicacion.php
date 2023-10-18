<?php
    include "../templates/cabecera.html";
    include "../utils/calculadora.php";
    include "../utils/imprimirResultado.php";

    use function calculadora\calcularTablasMult;
    use function imprimirResultado\printearTablaMult;

    echo "<h1>Tablas de Multiplicar</h1>";
    include "../formularios/formularioUnNum.php";
    if(isset($_POST[NUMERO_INPUT])){
        $num = $_POST[NUMERO_INPUT];
        $resultado = calcularTablasMult($num);
        printearTablaMult($resultado, $num);
    }else
        echo "Introduce numero";
?>