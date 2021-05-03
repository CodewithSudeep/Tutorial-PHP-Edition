<?php

// create a function which takes an array of characters and returns the string
$characters= array("C","o","d","w","i","t","h","s","u","d","e","e","p");
function arr_to_str($name){
    echo implode("",$name); //The implode() function returns a string from the elements of an array.
   
}
arr_to_str($characters);


?>
