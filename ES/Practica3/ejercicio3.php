<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $num4 = $_POST["num4"];
    $num5 = $_POST["num5"];

    $numeros = [$num1, $num2, $num3, $num4, $num5];
    $mayor = $numeros[0];

    for ($i = 1; $i < count($numeros); $i++) {
        if ($numeros[$i] > $mayor) {
            $mayor = $numeros[$i];
        }
    }

    //mayor numero 
    echo "Mayor entre los 5 numeros: " . $mayor . "<br>";
}