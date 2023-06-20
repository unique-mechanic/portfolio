function addTwoNumbers(){
    var a = document.getElementById("number1").value;
         var b = document.getElementById("number2").value;
           var c = parseInt(a) + parseInt(b); 
       document.getElementById("screen1").innerHTML=c;
   }

function createTable(){
    
}

const nameOnPass = "Umachandar";
console.log("Passenger Name: " + nameOnPass);
const nameOnId = "Umachandar";
const nameMatch = nameOnPass === nameOnId;
console.log("ID confirmed? " + nameMatch);
const length = 20;
const doesLengthPass = length < 30;
const height = 45;
const doesHeightPass = height < 55;
const isHandBaggageEligible = doesLengthPass && doesHeightPass;
console.log("Is Hand Baggage Eligible? " + isHandBaggageEligible);
const flightDes = "Chennai";
const returnFrom = "Pondicherry";
const isRoundTrip = flightDes === returnFrom;
console.log("Round Trip Check? " + isRoundTrip);
const bookings = 43;
const totalCapacity = 55;
const isFlightAvailable = totalCapacity > bookings;
console.log("Are seats available? " + isFlightAvailable);
document.querySelector("#name").innerHTML = nameOnPass;
document.querySelector("#id").innerHTML = nameMatch;
document.querySelector("#bag").innerHTML = isHandBaggageEligible;
document.querySelector("#des").innerHTML = isRoundTrip;
document.querySelector("#seat").innerHTML = isFlightAvailable;

//-------------------------------------------------------------------------
const firstDay = "Monday";
const secondDay = "Friday";
console.log("Available days: " + firstDay + " and " + secondDay);
const deliveryDay = "Friday";
console.log("Delivery Day: " + deliveryDay);
const firstDayCheck = deliveryDay === firstDay;
console.log("Successful delivery on the first day? " + firstDayCheck);
const secondDayCheck = deliveryDay === secondDay;
console.log("Successful delivery on the second day? " + secondDayCheck);
const dayResult = firstDayCheck || secondDayCheck;
console.log("Fulfilled Sheila's day preference? " + dayResult);
const requestAfterTime = 8;
const requestBeforeTime = 10;
console.log("Request delivery after " + requestAfterTime + " but before " +
  requestBeforeTime);
const deliveryTime = 9;
console.log("Delivery Time: " + deliveryTime);
const afterTimeCheck = deliveryTime >= requestAfterTime;
console.log("Delivery is after " + requestAfterTime + "? " + afterTimeCheck);
const beforeTimeCheck = deliveryTime < requestBeforeTime;
console.log("Delivery is before " + requestBeforeTime + "? " + beforeTimeCheck);
const timeResult = beforeTimeCheck && afterTimeCheck;
console.log("Fulfilled Sheila's time preference? " + timeResult);
const overallCheck = timeResult && dayResult;
console.log("Program scheduled well? " + overallCheck);

//-----------------------------------------------------------------------------------