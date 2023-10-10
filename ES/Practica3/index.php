<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $cesta = $_POST["cesta"];
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $num4 = $_POST["num4"];
    $num5 = $_POST["num5"];

    if($cesta <= 50){
            $cesta+=3.95;
        }else if($cesta > 50 && $cesta <= 75){
            $cesta+=2.95;
        }else if($cesta > 75 && $cesta < 100){
            $cesta+=1.95;
        }else{
            $cesta=0;
        }
    /*
    Ejercicio 2.

    switch (true) {
        case $cesta < 50:
            $cesta+=3.95;
            break;
        case $cesta >= 50 && $cesta < 75:
            $cesta+=2.95;
            break;
        case $cesta >= 75 && $cesta < 100:
            $cesta+= 1.95;
            break;
        case $cesta >= 100:
            $cesta+= 0;
            break;
        default:
            $cesta=0;
            break;
    }
    */
    //Datos recibidos por el formulario con gastos de envio incluidos
    echo "<h1>Resumen pedido con gastos de envio incluidos:</h1>";
    echo "Nombre: " . $firstname . "<br>";
    echo "Apellido: " . $lastname . "<br>";
    echo "Correo Electrónico: " . $email . "<br>";
    echo "Género: " . $gender . "<br>";
    echo "Cesta con gastos de envio: " . $cesta . "€ <br>";

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

?>
