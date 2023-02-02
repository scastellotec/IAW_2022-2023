const crudUrl = "https://crudcrud.com/api/6f037c94523047e1a4db0392e825434d/tareas";
const tarea = document.getElementById("tarea");

function grabarTarea(event){
  // Muestro el valor por consola para ver que lo leo correctamente
  console.log(tarea.value);
  
  // Objeto que enviamos como JSON
  let datosAenviar = {
    titulo: tarea.value,
    terminado: false
  };

  // Enviamos al servidor el objeto
  fetch(crudUrl, {
    method: "POST", // el metodo que uso para grabar
    body: JSON.stringify(datosAenviar), // el objeto que he creado
    headers: {
      "Content-type": "application/json; charset=UTF-8",
    }
  })
    .then((response) => response.json())
    .then((json) => console.log(json));
}

