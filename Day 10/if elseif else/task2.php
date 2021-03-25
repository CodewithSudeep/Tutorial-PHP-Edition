<?php


$x = 9;
echo "x=",$x,"<br>";
//find square of the given variable and 
$squ=$x*$x;
echo "x^2=",$squ,"<br>";
// print "hello" if the result is less than 50 
//print "hi" if the result is greater than 50
// otherwise print "bye"
if ($squ < 50){
    echo "hello";
}
elseif($squ > 50){
    echo "hi";
}
else{
    echo "bye";
}


?>