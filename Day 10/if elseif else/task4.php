<?php

$x = 66;
$y = 4;
<<<<<<< HEAD

=======
echo "x=",$x,"<br>";
echo "y=",$x,"<br>";
>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5
//perform modulus operation and check 
// 1. whether result is less than 5 or is even number 
// 2. whether the result is greater than 4 and is odd number
// 3. not 1 and 2
<<<<<<< HEAD

=======
$mod=$x%$y;
echo "x mod y=",$mod,"<br>";

if($mod <5 || $mod %2==0){
    echo " less than 5 or even";
}
elseif($mod >4 && $mod%2!=0){
    echo "greater than 4 and odd number";
}
else{
    echo "not both";
}


?>
>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5
