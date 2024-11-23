
function formIsEmpty(){
    let input = document.getElementsByTagName('input').value;
    let warning = document.querySelector('.warning-box');

    if(!input){
        const WARNINGTEXT = document.createElement("p");
        WARNINGTEXT.innerText = "Please fill up all fields";
        warning.appendChild(WARNINGTEXT);

        return false;
    }
}

function calculateTotalPrice(){
    const PICKUPDATE = new Date(document.getElementById("pickUpDate").value);
    const RETURNDATE = new Date(document.getElementById("returnDate").value);

    if(isNaN(PICKUPDATE) || isNaN(RETURNDATE) || RETURNDATE < PICKUPDATE){
        console.log("Select Valdi Dates");
        return;
    }

    const DIFFTIME = Math.abs(PICKUPDATE - RETURNDATE);
    const DIFFDAYS = Math.floor(DIFFTIME / (1000 * 3600 * 24));

    const PRICEPERDAY = parseInt(document.querySelector(".pricePerDay").innerHTML); 
    const TOTALPRICE = DIFFDAYS * PRICEPERDAY;

    document.querySelector(".price").innerHTML = TOTALPRICE;
    document.getElementById("totalRentPrice").value = TOTALPRICE;

    console.log(TOTALPRICE)
    console.log(PRICEPERDAY)
}