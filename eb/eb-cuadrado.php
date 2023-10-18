<?php
    include "templates/cabecera.php";
    include "eb-cuadrdo.php";
    include "formularios/formularioUnNum.php";

    use function calcularCuadrado\crearCuadrado;

    if(isset($_POST[NUMERO_INPUT]))
    {
        $numero = $_POST[NUMERO_INPUT];
        crearCuadrado($numero);
    }
    else
        echo "Introduce un Numero";




    include "templates/pie.php";
?>