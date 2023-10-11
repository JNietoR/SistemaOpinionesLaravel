<?php
// Ejercicio 4
$matriz = array(
    array(3,1),
    array(2,0)
);
foreach ($matriz as $fila) {
    echo "| ";
    foreach ($fila as $valor) {
        echo $valor . ' ';
    }
    echo "| <br>";
}
?>