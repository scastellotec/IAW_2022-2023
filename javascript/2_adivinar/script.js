// Generar un numero aleatorio
let randomNumber = Math.floor(Math.random() * 100) + 1;
// Muestro el numero por consola
console.log(randomNumber);

// Campo donde el usuario escribe el numero
let numeroUsuario = document.getElementById("guessField")

// Boton que el usuario pulsa para comprobar
let boton = document.getElementById("guessSubmit");

// Declaro la función comprobar
function comprobar(){
    // Leer lo que ha escrito el usario
    let valorUsuario = numeroUsuario.value;
    let resultado = "";
    // Compararlo con el numero aleatorio que he generado
    if(valorUsuario == randomNumber){
        resultado = "haz acertado";
    } else {
        resultado = "has fallado";
    }
    // Mostrar al usuario el resultado
    let parrafoResultado = document.getElementById("lastResult");
    parrafoResultado.textContent = resultado;
}

// Cada vez que alguien haga click en boton se ejecuta la función comprobar;
boton.addEventListener('click', comprobar);




