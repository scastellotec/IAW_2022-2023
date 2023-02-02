const urlCrudCrud = "https://crudcrud.com/api/79b5d4479473426a96b84fa55ae7a783";
const chisteAleatorio = document.getElementById("chisteAleatorio");
const chistesGuardados = document.getElementById("chistesGuardados");


// Listar chistes
function getchistesGuardados() {
    fetch(urlCrudCrud+"/chistes")
      .then((response) => response.json())
      .then((json) => doSomething(json));
  }
  
  function doSomething(val) {
    for(var key in val) {
        let linea = document.createElement("tr");
        let celda = document.createElement("td");
        celda.textContent = val[key].title;
        linea.appendChild(celda);
        chistesGuardados.appendChild(linea);
    }
  }

// Guardar un chiste
function guardarChiste() {
    // Objeto que enviamos como JSON
    let data = {
      title: chisteAleatorio.textContent,
      userId: 1
    };
  
    fetch(urlCrudCrud+"/chistes", {
      method: "POST",
      body: JSON.stringify(data),
      headers: {
        "Content-type": "application/json; charset=UTF-8",
      }
    })
      .then((response) => response.json())
      .then((json) => console.log(json));
  }

// Listar chiste aleatorio
function getNuevoChiste() {
    fetch("https://api.chucknorris.io/jokes/random")
      .then((response) => response.json())
      .then((json) => muestraChiste(json));
  }
  
function muestraChiste(respuestaJSON) {
    // Loop through the json response and print the information
    chisteAleatorio.textContent = respuestaJSON.value;
}
  
getNuevoChiste();
getchistesGuardados();