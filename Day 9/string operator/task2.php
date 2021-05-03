<?php

//

$name="Pradip Kunwar"; //your name
$college="Nagarjuna College of IT" ;//college name



$result=$name.$college; //concatenate two variable
$count =strlen($result); //count the total character ( string length) of result

// print result and count
echo "<br> My info: <br>",$result,"<br>";
echo "The total number of character in above string is ",$count;

?>
