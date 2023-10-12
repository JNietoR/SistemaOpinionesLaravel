<?php
// Ejercicio 4. 
$matriz = array(
    array(3,1),
    array(2,0)
);
//Dos for each anidados para imprimir la matriz
foreach ($matriz as $fila) {
    echo "| ";
    foreach ($fila as $valor) {
        echo $valor . ' ';
    }
    echo "| <br>";
}
?>