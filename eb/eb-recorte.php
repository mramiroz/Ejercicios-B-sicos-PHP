<?php
    include "../templates/cabecera.html";
    include "../utils/imprimirResultado.php";
    include "../formularios/formularioStr.php";

    use function imprimirResultado\imprimirString;

    imprimirString($_POST["stringInput"]);
?>