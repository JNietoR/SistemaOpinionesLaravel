<?php
// Ejercicio 4. 
$matriz = array(
    array(3,1),
    array(2,0)
);
/*
Dos for each anidados para imprimir la matriz ,
el primer bucle itera a través de las filas de la matriz, y el segundo bucle foreach itera a través de los valores en cada fila, 
cada valor se imprimira separado por un espacio, y cada fila se delimitara por una barra | al principio y al final
*/
foreach ($matriz as $fila) {
    echo "| ";
    foreach ($fila as $valor) {
        echo $valor . ' ';
    }
    echo "| <br>";
}
?>