<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Ejercicio 1. Crea un archivo PHP para ejecutar en nuestro servidor XAMPP que muestre
        por pantalla lo siguiente: ";
        echo "<br>";
        echo "<br>";
        echo "A. Variable de tipo String con valor “Hola” concatenada a un espacio y
        concatenada a una variable de tipo String con valor “Mundo”.";
        echo "<br>";
        $var1="Hola"; 
        $var2="Mundo";
        //concatenación de la palabra Hola con mundo y un espacion entre ellas.
        $concatenada =$var1." ".$var2;
        echo $concatenada;
        echo "<br>";
        echo "<br>";
        echo "B. Variable de tipo boolean con valor “true”.";
        echo "<br>";
        $boolean=true;
        //Imprime la variable boolean que actualmente es true, por lo que mostrara un 1.
        echo $boolean;
        echo "<br>";
        echo "<br>";
        echo "C. Variable de tipo float con valor “3,14”."; 
        echo "<br>";
        $Pi = 3.14;
        echo $Pi;
        echo "<br>";
        echo "<br>";
        echo "D. Variable  de  tipo  array que contenga los valores “1”, “2” y “3” y tengan como clave valor1, valor2 y valor3 respectivamente”.";
        echo "<br>";
        //creación de la variable $array1 con los datos indicados en el ej
        $array1 = array("valor1" => 1, "valor2" => 2, "valor3" => 3);
        //imprime la variable $array1 mediante la función print_r()
        print_r($array1);
        echo "<br>";
        echo "<br>";
        echo "Ejercicio 2. Cambia  la  variable  de  tipo  boolean  a valor “false”. Muestra el resultado obtenido al ejecutarlo con el servidor. ¿Qué ocurre y por qué?";
        //cambia el valor de la variable boolean a false
        $boolean = false;
        //imprime la variable boolean que al ser false, por lo que mostrara un 0, sin embargo en php el 0 no aparece en el resultado como vimos en clase.
        echo $boolean;
        echo "<br>";
        echo "<br>";
        echo "Ejercicio 3. Elimina  los  espacios  de  la  variable  concatenada  utilizando  la  función 
        correspondiente.";
        echo "<br>";
        //elimina los espacios de la variable concatenada utilizando la función str_replace(), haciendo que los espacios sean replazados por vacio.
        echo str_replace(" ", "", $concatenada);
        echo "<br>";
        echo "<br>";
        echo "Ejercicio 4. Muestra por pantalla el siguiente mensaje: (1 punto)";
        echo "<br>";
        //Agregamos \ delante del $ para que pueda imprimirlo en la pantalla al ser un caracter reservado en php.
        echo "El operador “+” sirve para sumar el valor de variables. Con la “/”podemos dividir valores entre variables. El símbolo del dólar “\$” indica que estamos utilizando variables pero no lo usaremos en las constantes o globales.";
        echo "<br>";
        echo "<br>";
        echo "Ejercicio 5. Almacena la cadena anterior en una variable y usa la función correspondiente para indicar la longitud de la cadena.";
        //Almacena la frase anterior en una variable.
        $variabletexto="El operador “+” sirve para sumar el valor de variables. Con la “/”podemos dividir valores entre variables. El símbolo del dólar “\$” indica que estamos utilizando variables pero no lo usaremos en las constantes o globales.";
        echo "<br>";
        //Utilizamos la función strlen() para indicar la longitud de la variable $variabletexto.
        echo strlen($variabletexto);
        echo "<br>";
        echo "<br>";
        echo "Ejercicio 6. Utiliza la función correspondiente para eliminar las vocales en la frase “Hello World”. ";
        echo "<br>";
        //definimos la variable $palabra con la frase “Hello World”.
        $palabra="Hello World";
        $palabra1=$palabra;
        //Utilizamos la función str_replace() para eliminar las vocales.
        $palabra=str_replace("e", "", $palabra);
        $palabra=str_replace("o", "", $palabra);
        $palabra=str_replace("u", "", $palabra);
        echo $palabra;
        //Otra forma de hacerlo sería utilizando un array con las vocales, utilizando la misma función pero solo sería un paso optimizando la memoria necesaria para realizar la operación.
        $vocales = array("a", "e", "i", "o", "u");
        $palabra1=str_replace($vocales, "", $palabra);
        echo "<br>";
        echo $palabra1;
        echo "<br>";
        echo "<br>";
        echo "Ejercicio 7. Crea una variable sin contenido y usa la función correspondiente para comprobar si está vacía. ¿Qué ocurre y por qué”. ";
        echo "<br>";
        //Creamos la variable $variablevacia sin darle ningun valor.
        $variablenull;
        //Utilizamos la función is_null() para comprobar si la variable $variablenull está vacía. Al utilizar esta función nos dará warning por que la variable no esta definida.
        echo is_null($variablenull);
        echo "<br>";
        echo "<br>";
        echo "Ejercicio 8. Convierte la variable que contiene la frase “Hello World” y conviértela en entero. ¿Qué ocurre y por qué?";
        echo "<br>";
        //Utilizamos la funcion intval() para convertir la variable $concatenada en entero, sin embargo como no comienza por un número no podra convertirla a entero y nos dará un 0 como error.
        $entero=intval($concatenada);
        echo $entero;
        echo "<br>";
        echo "<br>";
        echo "Ejercicio 9. Crea programas que calcule lo siguiente:";
        echo "<br>";
        echo "<br>";
        echo "A. La raíz cuadrada de 144";
        echo "<br>";
        //Utilizamos la función sqrt() para calcular la raíz cuadrada de 144
        echo sqrt(144);
        echo "<br>";
        echo "<br>";
        echo "B. La potencia 2^8";
        echo "<br>";
        //Utilizamos la función pow() para calcular la potencia 2^8
        echo pow(2,8);
        echo "<br>";
        echo "<br>";
        echo "C. El resto de la división de 100/6";
        echo "<br>";
        //Utilizamos el caracter % para calcular el modulo o resto de 100/6
        echo 100 % 6;
        echo "<br>";
        echo "<br>";
        echo "D. El máximo común divisor de 3 y 6";
        echo "<br>";
        //Creamos una función para calcular el máximo común divisor de 3 y 6
        function mcd($a, $b){
            if($b==0)
                return $a;
            else
                return mcd($b, $a % $b);
        }
        //Imprimimos el resultado de la función mcd concatenando el resultado.
        echo ("El mcd es: ".mcd(3, 6));   
        echo "<br>";
        echo "<br>";     
    ?>
</body>
</html>