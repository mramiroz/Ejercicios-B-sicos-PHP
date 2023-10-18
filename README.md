# Ejecicios básicos de PHP

## Estructura del proyecto
- La carpeta (/eb) se encuentran los index de cada uno de los ejercicios, donde se estrucutura la página.

- La carpeta fomularios tengo distintos formularios que mediante includes los puedo reutilizar en cada ejercicio

- La carpeta template estan la cabecera, pie y hoja de estilos para poder replicar en cada ejercicio

- La carpeta de utils que su principal función es tener la parte lógica y de vista de los ejercicios. 

- El archivo index.html que es el punto de partida para desplazarse por los distintos ejercicios


![Alt text](./imagenes-md/image.png)

## Index.html

``` html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicios Básicos PHP</h1>
    <ol>
        <li><a href="./eb/eb-diferencia.php">Diferencia PHP</a></li>
        <li><a href="./eb/eb-suma.php">Suma numeros Naturales</a></li>
        <li><a href="./eb/eb-potencia.php">Calcular potencia</a></li>
        <li><a href="./eb/eb-factorial.php">Calcular factorial</a></li>
        <li><a href="./eb/eb-multiplicacion.php">Tablas Multiplicar</a></li>
        <li><a href="./eb/eb-recorte.php">Recorte de string</a></li>
        <li><a href="./eb/eb-mes.php">Dias en un mes</a></li>
        <li><a href="./eb/eb-acumulador.php">Acumulador</a></li>
        <li><a href="./eb/eb-multiplos.php">Multiplos de 1 y 5</a></li>
        <li><a href="./eb/eb-cuadrado.php">Crear Cuadrado</a></li>
    </ol>
</body>
</html>
```
Permite únicamente desplazarse por los distintos ejercicios

![Alt text](./imagenes-md/image1.png)

## Carpeta /templates
### cabecera.html
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../templates/styles.css">
    <title>Document</title>
</head>
<body>
    <h3><a href="../index.html">Indice</a></h3>
```
Lo único que comentar sería que esta redirigido al archivo de styles.css y que he agregado un boton para redirigirse al index

### pie.html
```html
    </body>
</html>
```
Simple para cerrar el archivo html

### styles.css
```css
.par{
    border: 1px black solid;
    background-color: lightblue;
    padding: 3px;
}
.impar{
    border: 1px black solid;
    padding: 3px;
}

#tabla{
    border: 1px black solid;
    padding: 3px;
    margin: 10px;
}
```

Estilos para los ejercicios

## EB
### eb-diferencia.
```php
<?php
    include "../templates/cabecera.html";
    include "../utils/imprimirResultado.php";
    include "../utils/calculadora.php";
    include "../formularios/formularioDosNum.php";
    
    use function calculadora\calcularDiferencia;
    use function imprimirResultado\crearAlmohadillas;
    use function imprimirResultado\crearAsteriscos;

    echo "<h1>Calculadora de Diferencia</h1>";

    if(isset($_POST["primerNumero"]) && isset($_POST["segundoNumero"])){
        $primerNumero = $_POST["primerNumero"];
        $segundoNumero = $_POST["segundoNumero"];
        if (1 <= $primerNumero && $primerNumero <= 10 &&
             1 <= $segundoNumero && $segundoNumero <= 10){
            $diferencia = calcularDiferencia($primerNumero, $segundoNumero);
            crearAsteriscos($diferencia);
            crearAlmohadillas($diferencia);
        }
        else
            echo "Introduce numeros entre el 1 y 10";
    }

    include "../templates/pie.html";
?>
```
En un principio añadimos el formulario