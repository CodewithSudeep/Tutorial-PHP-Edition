<?php

//create a variable for definition of "computer" and print the definition also print the total number of words

$computer_def = "Computer is an electronic device that accepts the input from the user, process the data  typically in binary form according to instructions given to it and provides the meaning result as a output to the user. ";
echo $computer_def;
$count = str_word_count($computer_def);
echo "<br>";
echo "The total number of words is: ", $count;

?>
