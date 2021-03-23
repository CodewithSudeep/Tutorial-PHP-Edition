<?php


$x = 9;

//find square of the given variable and 
// print "hello" if the result is less than 50 
//print "hi" if the result is greater than 50
// otherwise print "bye"

$result = pow($x,2);
if($result < 50){
    echo "Hello";
}
elseif($result > 50){
    echo "hi";
}
else{
    echo "bye";
}
?>