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
/*bucle for anidado para sumar las dos matrices entre si, sumara los valores en la misma posicion de cada matriz es decir,
 $resultado = $matriz[0][0]+$matriz1[0][0]
 primero entrara en la primera fila y sumara cada posicion de la primera fila con su respectivo,
 repetira este proceso hasta que llege al a longuitud del array -1 ya que las posiciones empiezan en 0
 */
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