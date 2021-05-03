<?php


// create an associative array with index: symbol and information
$dollar=array("symbol"=>"$","information"=>"it's a dollar sign");
// hint

// array("symbol"=>, "information"=> )

// now print the value of symbol and inforamtion index
foreach ($dollar as $x=>$value){
    echo "$x=$value<br>";
}

?>