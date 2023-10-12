<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $cesta = $_POST["cesta"];

// Agregar los gastos de envio a la cesta según la cantidad
    if($cesta <= 50){
            $cesta+=3.95;
        }else if($cesta > 50 && $cesta <= 75){
            $cesta+=2.95;
        }else if($cesta > 75 && $cesta < 100){
            $cesta+=1.95;
        }else{
            $cesta=0;
        }
    
    /*   Tengo comenctado el ejercicio 2 ya que es el mismo que el 1 pero utilizando switch case en lugar de ifelse
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
//Imprimir el resultado del formulario con sus gastos de envio añadidos a la cesta
    echo "Datos personales formulario: <br>";
    echo "Nombre: ".$firstname."<br>";
    echo "Apellidos: ".$lastname."<br>";
    echo "Email: ".$email."<br>";
    echo "Genero: ".$gender."<br>";
    echo "Cesta con gastos de envio: ".$cesta."<br>";
}

?>
