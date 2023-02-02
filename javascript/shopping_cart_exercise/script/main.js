const milkConfirm = document.getElementById("milkConfirm");
const blenderConfirm = document.getElementById("blenderConfirm");
const nikeConfirm = document.getElementById("nikeConfirm");
const orbConfirm = document.getElementById("orbConfirm");

const milkCantidad = document.getElementById("milkCantidad");
const blenderCantidad = document.getElementById("blenderCantidad");
const nikeCantidad = document.getElementById("nikeCantidad");
const orbCantidad = document.getElementById("orbCantidad");

const milkPrice = 5;
const blenderPrice = 25;
const nikePrice = 25;   
const orbPrice = 100;

function calcula(){
    const subTotalElement = document.getElementById("sub-total");
    let subtotal = 0;
    if(milkConfirm.checked == true){
        subtotal += milkCantidad.value*milkPrice
        milkCantidad.readOnly = true;
    }else{
        milkCantidad.readOnly = false;
    }
    if(blenderConfirm.checked == true){subtotal += blenderCantidad.value*blenderPrice}
    if(nikeConfirm.checked == true){subtotal += nikeCantidad.value*nikePrice}
    if(orbConfirm.checked == true){subtotal += orbCantidad.value*orbPrice}
    subTotalElement.textContent = subtotal;
}