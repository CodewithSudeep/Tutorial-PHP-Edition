var simple = document.querySelector("#simplecalc");
var trignometric = document.querySelector("#trignometriccalc");
var conversion = document.querySelector("#conversioncalc");
var log = document.querySelector("#logcalc");

var simplebtn = document.querySelector("#simple");
var trignometricbtn = document.querySelector("#trignometric");
var conversionbtn = document.querySelector("#conversion");
var logbtn = document.querySelector("#log");

document.addEventListener("DOMContentLoaded", function() {
    simple.style.display="block";
  });

simplebtn.addEventListener("click", function(){
    simple.style.display="block";
    trignometric.style.display="none";
    conversion.style.display="none";
    log.style.display="none";
})

trignometricbtn.addEventListener("click", function(){
    simple.style.display="none";
    trignometric.style.display="block";
    conversion.style.display="none";
    log.style.display="none";
})

conversionbtn.addEventListener("click", function(){
    simple.style.display="none";
    trignometric.style.display="none";
    conversion.style.display="block";
    log.style.display="none";
})

logbtn.addEventListener("click", function(){
    simple.style.display="none";
    trignometric.style.display="none";
    conversion.style.display="none";
    log.style.display="block";
})