<?php
    CONST NUMERO_INPUT = "numeroInput";
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8" );?>" method="post">
    <input type="number" name="<?=NUMERO_INPUT?>" required>
    <input type="submit" value="Enviar">
</form>