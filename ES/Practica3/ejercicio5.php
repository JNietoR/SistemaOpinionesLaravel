<?php
$matriz = array(
    array(1,0),
    array(0,1)
);
$matriz1 = array(
    array(0,1),
    array(1,0)
);
//array vacio donde se va a guardar la nueva matriz con el resultado de la suma
$resultado;
//bucle for anidado para sumar las dos matrices entre si
for($i=0;$i<count($matriz);$i++) {
    for($j=0;$j<count($matriz1);$j++){
        $resultado[$i][$j]=$matriz[$i][$j]+$matriz1[$i][$j];
    }
}
//La misma funcion que en el ejercicio anterior para imprimir la matriz
foreach ($resultado as $fila) {
    echo "| ";
    foreach ($fila as $valor) {
        echo $valor . ' ';
    }
    echo "| <br>";
}
?>