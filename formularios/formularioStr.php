<?php
    CONST STRING_INPUT = "stringInput";
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8" );?>" method="post">
    <input type="name" name="<?=STRING_INPUT?>" required>
    <input type="submit" value="Enviar">
</form>