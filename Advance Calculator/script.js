var dispaly = document.querySelector("#display")
var numbers = document.querySelectorAll(".buttons")
var form = document.querySelector("#form");
var operands = "";
numbers.forEach(function(){
    this.addEventListener("click",function(e){
        e.preventDefault();
        if (e.target.innerHTML=="clear") {
           dispaly.value="" 
           operands="";
        }
        else if(e.target.innerHTML.includes("<")){
            ;
        }
        else if (e.target.innerHTML=="=") {
           form.submit();
         }
        else{
            operands += e.target.innerHTML;
            dispaly.value = operands;
        }
    })
})


