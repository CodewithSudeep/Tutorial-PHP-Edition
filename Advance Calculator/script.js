var simple = document.querySelector("#simplecalc");
var trignometric = document.querySelector("#trignometriccalc");
var conversion = document.querySelector("#conversioncalc");
var log = document.querySelector("#logcalc");

var simplebtn = document.querySelector("#simple");
var trignometricbtn = document.querySelector("#trignometric");
var conversionbtn = document.querySelector("#conversion");
var logbtn = document.querySelector("#log");

document.addEventListener("DOMContentLoaded", function() {
<<<<<<< HEAD
    simple.style.display="block";
  });

simplebtn.addEventListener("click", function(){
=======
    if (window.localStorage.key("active")) {
        var key = window.localStorage.getItem("active");
        if (key==1) {
            simplebtn.click();
        }
        else if (key==2) {
            trignometricbtn.click();
        }
        else if (key==3) {
            conversionbtn.click();
        }
        else if (key==4) {
            logbtn.click();
        }
        else{
            simplebtn.click();
        }

    }
   
   
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
    window.localStorage.setItem("active",1);
   makeActive(this)
   makeInactive(trignometricbtn,conversionbtn,logbtn);
>>>>>>> 1f967168467bc5a3476bad1ecd79ffdaca9e2893
    simple.style.display="block";
    trignometric.style.display="none";
    conversion.style.display="none";
    log.style.display="none";
})

trignometricbtn.addEventListener("click", function(){
<<<<<<< HEAD
=======
    window.localStorage.setItem("active",2);
    makeActive(this)
   makeInactive(simplebtn,conversionbtn,logbtn);
>>>>>>> 1f967168467bc5a3476bad1ecd79ffdaca9e2893
    simple.style.display="none";
    trignometric.style.display="block";
    conversion.style.display="none";
    log.style.display="none";
})

conversionbtn.addEventListener("click", function(){
<<<<<<< HEAD
=======
    window.localStorage.setItem("active",3);
    makeActive(this)
   makeInactive(trignometricbtn,simplebtn,logbtn);
>>>>>>> 1f967168467bc5a3476bad1ecd79ffdaca9e2893
    simple.style.display="none";
    trignometric.style.display="none";
    conversion.style.display="block";
    log.style.display="none";
})

logbtn.addEventListener("click", function(){
<<<<<<< HEAD
=======
    window.localStorage.setItem("active",4);
    makeActive(this)
   makeInactive(trignometricbtn,conversionbtn,simplebtn);
>>>>>>> 1f967168467bc5a3476bad1ecd79ffdaca9e2893
    simple.style.display="none";
    trignometric.style.display="none";
    conversion.style.display="none";
    log.style.display="block";
})