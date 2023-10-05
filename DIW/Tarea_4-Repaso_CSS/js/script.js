var isRow = true; 
function orientacion(){
    var juegos = document.querySelectorAll(".contenedor");
    for(var i=0; i<juegos.length; i++){
        if (isRow) {
            juegos[i].style.flexDirection="column";
        } else {
            juegos[i].style.flexDirection="row";
    }
    }
    isRow = !isRow;
}
