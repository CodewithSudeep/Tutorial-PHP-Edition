<?php

// create two varibale of int data type and perform :
// all comparison operator
$abc=1024;
$ps =1033;
echo "<br><br>Comprison:(greater than ):<br>",var_dump($abc>$ps); //greater than
echo "<br><br>Comprison:(smaller than ):<br>",var_dump($abc<$ps); //small than
echo "<br><br>Comprison:(greaterthan or equal to):<br>",var_dump($abc>=$ps); //greater than or euqal to
echo "<br><br>Comprison:(smaller than or equal to):<br>",var_dump($abc<=$ps); //less than or equal to
echo "<br><br>Comprison:(not equal to):<br>",var_dump($abc!=$ps);  //not equal to
echo "<br><br>Comprison:(not identical):<br>",var_dump($abc!==$ps); //not identical
echo "<br><br>Comprison:( equal to):<br>",var_dump($abc==$ps);  //equal
echo "<br><br>Comprison:(identical):<br>",var_dump($abc===$ps); //identical
echo "<br><br>Comprison:(identical):<br>",var_dump($abc<=>$ps);  //identical
echo "<br><br>Comprison:(not equal to):<br>",var_dump($abc<>$ps); //not equal

?>
