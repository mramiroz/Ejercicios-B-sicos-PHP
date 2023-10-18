<?php
    include "../templates/cabecera.html";
    include "../utils/imprimirResultado.php";
    
    use function imprimirResultado\imprimirString;
    
    echo "<h1>Imprimir String</h1>";
    include "../formularios/formularioStr.php";

    if(isset($_POST[STRING_INPUT])){
        imprimirString($_POST[STRING_INPUT]);
    }else
        echo "Introduce String";
?>