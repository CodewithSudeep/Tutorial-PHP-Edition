<?php


<<<<<<< HEAD
// demonstrate the use following function
=======
// demonstrate the use of  following function
>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5
// 1. explode()
// 2. implode()
// 3. count()
// 4. array_sum()
<<<<<<< HEAD
=======

//explode-->The explode() function breaks a string into an array.
$str= "How about a cup of coffee with me";

print_r(explode(" ",$str));


//implode-->The implode() function returns a string from the elements of an array.
$concate_txt= array('This','text','are','going','to','be','displayed','in','same','line');
echo "<br><br>",implode("_",$concate_txt),".";


//count()-->The count() function returns the number of elements in an array.
$subjects= array("Microprocessor","Statistics","OOP","Discarete Structure","Maths=II");
echo "<br><br>The number of elements in subject array are :",count($subjects);


//array_sum()--> The array_sum() function returns the sum of all the values in the array.
$to_be_added= array(99,65,52,14,57,57);
echo "<br><br>The sum of numbers in array is:",array_sum($to_be_added);



?>
>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5
