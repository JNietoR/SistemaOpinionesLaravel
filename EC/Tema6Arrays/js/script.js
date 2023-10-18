/*
Ejercicio 1: 
Crea una función que reciba un array de valores enteros (positivos y negativos),  
y devuelva otro array con la suma parcial de cada elemento del array que se pasa como parámetro.
*/


function ejercicio1() {
    var arrayej1 = document.getElementById("arrayej1");
    var numeros;
    var array = [];
    

    while (numeros !== "fin") {
        numeros = prompt("Ingresa un número para agregar al array:");
        if (numeros !== "fin") {
            array.push(parseInt(numeros));
        }
    }
    var resultado = sumaelementosarray(array);
    arrayej1.innerHTML = "El array con el que vamos a trabajar es: [" + array + "] y el resultado es [" + resultado + "]";
    
}

function sumaelementosarray(array) {
    var arraysumado = [];
    var sumatoria = 0;
    for (var i = 0; i < array.length; i++) {
        sumatoria += array[i];
        arraysumado.push(sumatoria);
    }
    return arraysumado;
}

function ejercicio2() {

}
function ejercicio3() {

}
function ejercicio4() {

}
function ejercicio5() {

}
function ejercicio6() {

}
function ejercicio7() {

}
function ejercicio8() {

}
function ejercicio9() {

}