<?php


$myArray = array();
$myArray[] = array("name"=>"sudeep","age"=>22);
$myArray[] = array("name"=>"bibek","age"=>22);
$myArray[] = array("name"=>"pradip","age"=>22);
$myArray[] = array("name"=>"rik","age"=>22);
$myArray[] = array("name"=>"raj","age"=>22);
$myArray[] = array("name"=>"aadarsha","age"=>22);
$myArray[] = array("name"=>"sarbendra","age"=>22);



// now print all the name and ages in an array $myArray
foreach($myArray as $a => $value){
    foreach($value as $b=>$val){
    echo $val." ";
    }
    echo "<br/>";
}

?>