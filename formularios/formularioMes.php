<?php
    CONST MES_INPUT = "mesInput";
    CONST BISIESTO_INPUT = "bisiesto";
?>

<form action="" method="post">
    <input type="text" name="<?=MES_INPUT?>">
    <input type="radio" name="<?=BISIESTO_INPUT?>" value="si"> Bisiesto
    <input type="submit" value="Enviar">
</form>