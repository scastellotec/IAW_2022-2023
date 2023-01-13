let resultado = document.getElementById("resultado");
let uno = document.getElementById("uno");
let dos = document.getElementById("dos");
let tres = document.getElementById("tres");
let cuatro = document.getElementById("cuatro");
let cinco = document.getElementById("cinco");
let seis = document.getElementById("seis");
let siete = document.getElementById("siete");
let ocho = document.getElementById("ocho");
let nueve = document.getElementById("nueve");
let suma = document.getElementById("suma");
let resta = document.getElementById("resta");
let multiplicacion = document.getElementById("mutiplicacion");
let division = document.getElementById("division");
let limpiar = document.getElementById("limpiar");

uno.addEventListener('click', mostrarUno);

function mostrarUno(){
    resultado.value = "1";
}