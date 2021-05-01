<?php


// create an associative array with index: symbol and information
// hint

// array("symbol"=>, "information"=> )

// now print the value of symbol and inforamtion index

$info = array("R"=>"RED","Y"=>"YELLOW","B"=>"BLUE");
foreach($info as $items =>$val){
    echo $items." -> ".$val."<br/>"; 
}
?>