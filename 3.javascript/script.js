/*Internal and External JS

var curDate = new Date();

window.alert(curDate); */

/*Tip Calculator*/

//Custom function
function calculateTip() {
    "use strict";
    
    //Store the data of inputs
    var billAmount, serviceQuality, numPeople, total;
    
    billAmount = document.getElementById("billAmount").value;
    serviceQuality = document.getElementById("serviceQuality").value;
    numPeople = document.getElementById("totalPeople").value;
    
    //Quick Validation
    if (billAmount === "" || serviceQuality === 0) {
        window.alert("Please enter some values to get this baby up and running!");
        return;  //this will prevent the function from continuing 
    }
    
    //Check to see if this input is empty or less than
    if (numPeople === "" || numPeople === 1) {
        document.getElementById("each").style.display = "none";
    } else {
        document.getElementById("each").style.display = "block";
    }
    
    //Do some math
    total = (billAmount * serviceQuality) / numPeople;
    total = Math.round(total * 100) / 100;
    total.toFixed(2);
    
    //Display the tip
    document.getElementById("totalTip").style.display = "block";
    document.getElementById("tip").innerHTML = total;
    
}

//Hide tip amount on load
document.getElementById("totalTip").style.display = "none";
document.getElementById("each").style.display = "none";

//Clicking the button calls our custom function
document.getElementById("calculate").onclick = function () {
    "use strict";
    calculateTip();
};
