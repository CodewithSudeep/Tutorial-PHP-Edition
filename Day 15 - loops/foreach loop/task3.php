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
foreach ($myArray as $p=>$val){
    foreach ($val as $items=>$value){
        echo $value,"<br>";
    }
   echo "<br>";
}
?>
