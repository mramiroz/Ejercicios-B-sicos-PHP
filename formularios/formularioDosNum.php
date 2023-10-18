<?php
    const PRIMER_NUMERO = "primerNumero";
    const SEGUNDO_NUMERO = "segundoNumero";
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8" );?>" method="post">
    <input type="number" name=<?=PRIMER_NUMERO?>>
    <input type="number" name=<?=SEGUNDO_NUMERO?>>
    <input type="submit" value="Enviar">
</form>