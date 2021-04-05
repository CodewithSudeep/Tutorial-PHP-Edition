<?php

// demonstrate the use following function
// 1. explode()
// 2. implode()
// 3. count()
// 4. array_sum()


//explode()  The explode() function breaks a string into an array.
//syntax = explode(" ",$string); the first parameter defines on what meeting the string is to be broken herre if it encouters space string is ///////broken into array
$myInfo = "Hi I'm Bibek Angdembe.";
var_dump (explode(" ",$myInfo));
echo "<br/>";
$string ="He-is-a-good-boy";
$arr=(explode("-",$string));
echo $arr[0]."<br/>"; //gets he


//implode() The implode() function returns a string from the elements of an array

$messi = array('Messi','is','the','goat','of','foootball');
$messiInfo = implode(" ",$messi);
$test=implode("*",$messi);
echo $messiInfo."<br/>";
echo $test."<br/>";


//count()   counts the total number of items in array
$sports = array('football','cricket','futsal','basketball');
$total = count($sports);
echo "The number of items in array is ".$total."<br/>";


//array_sum()  it calculates the sum of all numeric data in array also assocative array

$marks = array(10,15,30,50);
$sum = array_sum($marks);
echo "The sum is $sum<br/>";
$b = array("anti" => 1.42, "biotic" => 12.3, "charisma" => 73.4);
echo array_sum($b)."<br/>";


?>