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
    makeActive(simplebtn);
  });

function makeActive(el){
    if(!el.classList.contains('active')){
        el.classList.add('active')
    }
}
function makeInactive(el1,el2,el3){
    if(el1.classList.contains('active') || el2.classList.contains('active') || el3.classList.contains('active')){
        el1.classList.remove('active');
        el2.classList.remove('active');
        el3.classList.remove('active');
    } 
}

simplebtn.addEventListener("click", function(){
   makeActive(this)
   makeInactive(trignometricbtn,conversionbtn,logbtn);
    simple.style.display="block";
    trignometric.style.display="none";
    conversion.style.display="none";
    log.style.display="none";
})

trignometricbtn.addEventListener("click", function(){
    makeActive(this)
   makeInactive(simplebtn,conversionbtn,logbtn);
    simple.style.display="none";
    trignometric.style.display="block";
    conversion.style.display="none";
    log.style.display="none";
})

conversionbtn.addEventListener("click", function(){
    makeActive(this)
   makeInactive(trignometricbtn,simplebtn,logbtn);
    simple.style.display="none";
    trignometric.style.display="none";
    conversion.style.display="block";
    log.style.display="none";
})

logbtn.addEventListener("click", function(){
    makeActive(this)
   makeInactive(trignometricbtn,conversionbtn,simplebtn);
    simple.style.display="none";
    trignometric.style.display="none";
    conversion.style.display="none";
    log.style.display="block";
})