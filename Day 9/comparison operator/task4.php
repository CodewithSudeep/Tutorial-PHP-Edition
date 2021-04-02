<?php

// create two varibale of int data type and perform :
// 1. identical 2. not identical 3. spaceship
$zzz= 999;
$yyy= 999;
echo "Comprison:(identical):<br>",var_dump($zzz==$yyy);  //identical
echo "<br><br>Comprison:(not identical):<br>",var_dump($zzz!==$yyy);  //not identical
echo "<br><br>Comprison:(spaceship):<br>",var_dump($zzz<=>$yyy);  //spaceship

?>
