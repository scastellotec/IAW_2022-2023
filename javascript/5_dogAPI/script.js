const perroRandomResult = document.getElementById("perroRandom");
const razasListResult = document.getElementById("razasList");

function razaPerros(){
    fetch("https://dog.ceo/api/breeds/list/all")
        .then((response) => response.json())
        .then((json) => muestraRazas(json));
}
  
function muestraRazas(val) {
    // Loop through the json response and print the information
    console.log(val);
    let razas = "";
    for(var key in val.message) {
        console.log(key);
        razas += `<option value="${key}">`;
    }
    razasListResult.innerHTML = razas;
}

razaPerros()

function perroRandom(){
    fetch("https://dog.ceo/api/breeds/image/random")
        .then((response) => response.json())
        .then((json) => doSomething(json));
}
  
function doSomething(val) {
    // Loop through the json response and print the information
    console.log(val);
    console.log(val.message);
    perroRandomResult.innerHTML = `<img src="${val.message}">`;
}

