// Localizo en variables elementos del HTML
let resta = document.getElementById("resta");
let salida = document.getElementById("salida");
let suma = document.getElementById("suma");

function incrementar(){
    let valor = salida.textContent;
    valor++; //valor = valor + 1;
    salida.textContent = valor;
}

function decrementar(){
    let valor = salida.textContent;
    if(valor > 0){
        valor--; //valor = valor - 1;
    }
    salida.textContent = valor;
}

suma.addEventListener('click', incrementar);
resta.addEventListener('click', decrementar);