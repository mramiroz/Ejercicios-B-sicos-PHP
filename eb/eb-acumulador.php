<?php
    include "../templates/cabecera.html";

    CONST NUMERO_INPUT = "numeroInput";

    function sumarNumeros($numero, $suma){
        $numero = intval($numero);
        $suma += $numero;
        return $suma;
    }

    $suma = isset($_POST['suma']) ? $_POST['suma'] : 0;
    if(isset($_POST[NUMERO_INPUT]))
    {
        $numero = $_POST[NUMERO_INPUT];
        $suma = sumarNumeros($numero, $suma);
    }

    if ($suma > 50)
        echo "Suma: ".$suma;
    else{

?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8" );?>" method="post">
        <input type="number" name="<?=NUMERO_INPUT?>" required>
        <input type="hidden" name="suma" value="<?php echo $suma; ?>"> 
        <button type="submit">Sumar</button>
    </form>
<?php
        echo "Suma: ".$suma;
    }
    include "../templates/pie.html";
?>