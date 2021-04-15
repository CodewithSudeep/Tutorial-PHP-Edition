<?php


// create an associative array with index: symbol and information
// hint

// array("symbol"=>, "information"=> )

// now print the value of symbol and inforamtion index
$info = array("crossed p"=>"No parking","crossed H"=>"No horn","plus"=>"Red cross");
foreach($info as $items =>$val){
    echo $items." -> ".$val."<br/>"; 
}
?>
