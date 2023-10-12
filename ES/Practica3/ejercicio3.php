<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $num4 = $_POST["num4"];
    $num5 = $_POST["num5"];

    $numeros = [$num1, $num2, $num3, $num4, $num5];
    $mayor = $numeros[0];

    //ordenar el array con los numeros con un for mientras que cambia el valor del numero mayor siempre que lo encuentra
    for ($i = 1; $i < count($numeros); $i++) {
        if ($numeros[$i] > $mayor) {
            $mayor = $numeros[$i];
        }
    }

    /* otra forma de hacerlo sería con la propia funcion de los arrays rsort que ordena el contenido del array de forma descendente
    rsort($numeros, SORT_NUMERIC);
    $mayor = $numeros[0];
    */

    //imprimir resultado
    echo "Mayor entre los 5 numeros: " . $mayor . "<br>";
}