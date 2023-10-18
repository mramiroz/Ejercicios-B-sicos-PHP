<?php
    include "../templates/cabecera.html";
    include "../utils/verificarMes.php";
    include "../formularios/formularioMes.php";

    use function verificarMes\imprimirMes;

    if(isset($_POST["bisiesto"])  && isset($_POST["mesInput"])){
        $mes = $_POST["mesInput"];
        $bisiesto = $_POST["bisiesto"];
        imprimirMes($mes, $bisiesto);
    }
    include "../templates/pie.html";
?>