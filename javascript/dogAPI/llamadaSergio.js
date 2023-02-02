
 fetch("https://dog.ceo/api/breeds/list/all").then(
   function(response){
      return response.json();
   }).then(
      async function(json){
         const data = await json.message;
         console.log(Object.keys(data));
         for (const raza of Object.keys(data)) {
            console.log(raza);
        }

 });