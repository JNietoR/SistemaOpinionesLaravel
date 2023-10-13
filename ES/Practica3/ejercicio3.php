<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $num4 = $_POST["num4"];
    $num5 = $_POST["num5"];

    //trasladamos los datos recogidos mediante el formulario a un array con el que trabajaremos
    $numeros = [$num1, $num2, $num3, $num4, $num5];
    //variable que recogera el número mas grande entre los 5 introducidos, la he inicializado para que el mayor valor sea el primer valor del array
    $mayor = $numeros[0];

    /*comprobando posicion a posicion con el numero mas grande encontrado en ese momento, 
    me he saltado la pos 0 ya que $mayor comienza siendo el valor de la posicion 0, 
    y llegara hasta que $i sea menor que la cantidad de elementos del array ya que os arrays comienzan con 0 
    y su ultima posicion es siempre la longitud -1.
    */
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
?>