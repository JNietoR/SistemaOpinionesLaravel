<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        phpinfo();
        /*
        Definicion de variables, tiene que declarase con el $
        Debe empezar por un simbolo o una letra no puede comenzar por un numero
        */
        
        $var="hola";
        /*
        Se puede asignar el valor a una variable por referencia
        */
        $var1=&$var;
        echo $var1;
        /*
        En este caso var1 tendra el valor hola que estaba almacenado en $var
        si se asigna por valor guardaremos en $var1 el valor de ese momento en $var
        sin embargo al hacerlo por referencia $var1 tendra el que tenga $var cualquier momento que la llamemos
        */
        $var1=1;
        $var2=2;
        $var3=3;
        $var1=&$var2; 
        echo $var1;
        echo "||";
        $var2=3;
        echo $var1;
        /* Podemos definir funciones de forma global, local o estatica */
        global $varglobal;
        /* Puedes verla desde cualquier sitio */
        $varglobal = "global"; 
        $varlocal=0.1; 
        /*Puede utilizarse en el bloque donde se declara */
        static $var=0; 
        /* Variable donde su valor no varia */
        /*Para definir una constante define(nombrevlaribable,valor); */
        define("IRPF",15);
        /* Para imprimir la variable no se utiliza el $ delante de la variable ya que es una constante */
        echo IRPF; 


        /* Conversión de tipo de dato 
        $var="0";
        $var1="1";
        $var3=$var+$var1; Dara error si intentamos ipmrimirlo por que no se puede sumar variable tipo string, en php se concatena con . 
        $var3= intval($var);
        $var4= intval($var1);
        $var5= $var3+$var4;
        
        */
        $varArray1=array("1","2");
        echo $varArray1[1];
        $mapa1=array("clave1" =>1,"clave2" =>42);
        echo $mapa1["clave1"];
        
        /* Cadenas de texto en p0hp */
        $cadenatotal="hola";
        str_replace("o","a",$cadenatotal);
        echo $cadenatotal; /* Devolvería hala por que cambiaria la o por una a */
        $cadenatotal="Jorge Nieto";
        str_replace(" ","",$cadenatotal); /* Eliminaria el espacio  */
        strlen($cadenatotal); /* Devolvería la longitud del $cadenatotal */
        trim($cadenatotal); /* Elimina los espacios al inicio y final del string*/


        define("PI", 3.14);
        $radio=6;

        $volumen = (4/3)*PI*(pow($radio,3));

        echo $volumen;



    ?>
</body>
</html>
