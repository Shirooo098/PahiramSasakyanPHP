

// let pricePerHour = 0;

// function calcTotalRentCost(){
//     const PICKUPDATE = document.getElementById("pickUpDate").value;
//     const PICKUPTIME = document.getElementById("pickUpTime").value;
//     const RETURNDATE = document.getElementById("returnDate").value;
//     const RETURNTIME = document.getElementById("returnTime").value;

//     let costText = document.getElementById("totalCost");
    
//     if(PICKUPDATE && PICKUPTIME && RETURNDATE && RETURNTIME){
//         const DURATIONINMILLISECONDS = PICKUPTIME - RETURNTIME
//         const DURATIONINHOURS = DURATIONINMILLISECONDS / (1000 * 60 * 60)

//         const TOTALCOST = Math.max(0, DURATIONINHOURS) * pricePerHour;

//         costText.innerText = `P${TOTALCOST.toFixed(2)}`;
//     }
// }

// function initializeRentalPrice(price){
//     pricePerHour = price;
// }
// document.addEventListener('DOMContentLoaded', function(){
//     document.getElementById("pickUpDate").addEventListener('change', calcTotalRentCost)
//     document.getElementById("pickUpTime").addEventListener('change', calcTotalRentCost)
//     document.getElementById("returnDate").addEventListener('change', calcTotalRentCost)
//     document.getElementById("returnTime").addEventListener('change', calcTotalRentCost)
// })

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


function validateConfirmPassword(){
    let conPass = document.getElementById('conPass').value;
    let pass = document.getElementById('pass').value;

    if(conPass != pass){
        alert('Mismatch Password');
    }
}
