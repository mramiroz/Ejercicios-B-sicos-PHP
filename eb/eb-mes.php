<?php
    include "../templates/cabecera.html";
    include "../utils/verificarMes.php";

    use function verificarMes\imprimirMes;
    
    echo "<h1>Imprimir Mes</h1>";
    include "../formularios/formularioMes.php";
    if(isset($_POST[MES_INPUT])){
        $mes = $_POST[MES_INPUT];
        $bisiesto = "no";
        if(isset($_POST[BISIESTO_INPUT]))
            $bisiesto = $_POST[BISIESTO_INPUT];
        imprimirMes($mes, $bisiesto);
    }
    include "../templates/pie.html";
?>