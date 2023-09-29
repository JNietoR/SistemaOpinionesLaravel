function hola(){
    alert("hola");
}
function adios(){
    alert("adios");
}
function nombre(){
    var nombre=prompt("Ingrese su nombre de usuario");
    alert("Bienvenido a mi página web sobre Cyberpunk 2077. Phantom Liberty "+nombre);
}
function calculadora(){
    var numero1=parseFloat(prompt("Ingrese el primer número"));
    var numero2=parseFloat(prompt("Ingrese el segundo número"));
    var continuar=true;
    while(continuar){
        var operacion=prompt("Ingrese la operación que desea realizar utilize el simbolo +, -, *, /, escriba 'introducir' para introducir nuevos numeros o 'salir' para salir de la calculadora.");
        if(operacion=="salir" || operacion==("Salir")){
            continuar=false;
            break;
        }else{
            if(operacion=="+"){
                console.log("Resultado de la suma: "+(numero1+numero2));
            }else if(operacion=="-"){
                console.log("Resultado de la resta: "+(numero1-numero2));
            }else if(operacion=="*"){
                console.log("Resultado de la multiplicación: "+(numero1*numero2));
            }else if(operacion=="/"){
                if(numero1 == 0 || numero2 == 0){
                    console.log("No se puede dividir por cero");
                }else{
                    console.log("Resultado de la división: "+(numero1/numero2));
                }
            }else if(operacion=="introducir" || operacion==("Introducir")){
                var numero1=parseFloat(prompt("Ingrese el primer número: "));
                var numero2=parseFloat(prompt("Ingrese el segundo número: "));
            }else if(operacion=="salir" || operacion==("Salir")){
                continuar=false;
                break;
            }
        }
        
    }
}
