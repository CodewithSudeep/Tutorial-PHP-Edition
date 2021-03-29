<?php


$x = 9;

//find square of the given variable and 
// print "hello" if the result is less than 50 
//print "hi" if the result is greater than 50
// otherwise print "bye"

$y=pow($x,2);
if ($y<50) {
    echo "Hello";
}
else if($y>50){
   echo "hi";
}
else{
   echo "bye";
}

?>