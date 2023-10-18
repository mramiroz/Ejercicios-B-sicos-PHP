<?php
    namespace calculadora;

    CONST FINAL_TABLA_MULTIPLICAR = 10;
    function sumarNumerosNaturales($limite): int{
        $resultado = 0;
        for($i = 1; $i <= $limite; $i++)
            $resultado += $i;
        return $resultado;
    }
    function calcularDiferencia($primerNumero, $segundoNumero): int{
        return abs($primerNumero - $segundoNumero);
    }
    function calcularPotencia($base, $exponente): int{
        $resultado = 0;
        for($index = 1; $index <= $exponente; $index++){
            $resultado += $base * $base;
        }
        return $resultado;
    }
    function calcularFactorial($num): int{
        $res = 1;
        for ($i=1; $i <= $num; $i++) { 
            $res *= $i;
        }
        return $res;
    }

    function calcularTablasMult($num){
        $resultados = [];
        for ($i=1; $i <= FINAL_TABLA_MULTIPLICAR; $i++) { 
            $resultados[] = $num * $i;
        }
        return $resultados;
    }

?>