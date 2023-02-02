let url = "https://www.zaragoza.es/sede/servicio/farmacia.json";
const app = document.getElementById("app");



function getFarmacias() {
  fetch(url)
    .then((response) => response.json())
    .then((json) => mostrarFarmacias(json));
}

function mostrarFarmacias(respuesta) {
  // Mostrar mensaje para ver que funciona
  //console.log("La llamada ha funcionado");
  
  // Mostrar un solo valor
  //console.log(respuesta.totalCount);
  //console.log(respuesta.rows);

  for(var clave in respuesta.result) {
    //console.log(clave); // Muestro que se almacena en clave y luego pienso
    //console.log(respuesta.result[clave]); // Muestra toda la info de cada farmacia
    //console.log(respuesta.result[clave].title); //Muestra solo el titulo
    let farmarcia = document.createElement("p");
    farmarcia.textContent = respuesta.result[clave].title;
    app.appendChild(farmarcia);
  }
}

getFarmacias();