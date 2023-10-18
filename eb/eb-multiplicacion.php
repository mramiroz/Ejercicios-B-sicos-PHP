<?php
    include "../templates/cabecera.html";
    include "../utils/calculadora.php";
    include "../utils/imprimirResultado.php";

    use function calculadora\calcularTablasMult;
    use function imprimirResultado\printearTablaMult;

    echo "<h3>Pedir un número X y mostrar su tabla de multiplicar.</h3>";
    include "../formularios/formularioUnNum.php";
    if(isset($_POST["numeroInput"])){
        $num = $_POST["numeroInput"];
        $resultado = calcularTablasMult($num);
        printearTablaMult($resultado, $num);
    }else
        echo "Introduce numero";
?>