<?php
    include "../templates/cabecera.html";
    include "../utils/imprimirResultado.php";
    include "../utils/calculadora.php";
    
    use function calculadora\calcularDiferencia;
    use function imprimirResultado\crearAlmohadillas;
    use function imprimirResultado\crearAsteriscos;
    
    echo    "<h3>Pedir al usuario dos números A y B entre el 1 y el 10. Escribir en pantalla tantos asteriscos como diferencia haya entre
    los números (resolviéndolo con while, mientras uno sea menor que otro se escribe asterisco) y repetir con almohadillas 
    (resolviéndolo con for utilizando la diferencia entre a y b como número de repeticiones).</h3>";
    
    include "../formularios/formularioDosNum.php";
    if(isset($_POST["primerNumero"]) && isset($_POST["segundoNumero"])){
        $primerNumero = $_POST["primerNumero"];
        $segundoNumero = $_POST["segundoNumero"];
        if (1 <= $primerNumero && $primerNumero <= 10 && 1 <= $segundoNumero && $segundoNumero <= 10){
            $diferencia = calcularDiferencia($primerNumero, $segundoNumero);
            crearAsteriscos($diferencia);
            crearAlmohadillas($diferencia);
        }
        else
            echo "Introduce numeros entre el 1 y 10";
    }

    include "../templates/pie.html";
?>
