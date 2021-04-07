

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


// demonstrate the use following function
// 1. explode()
// 2. implode()
// 3. count()
// 4. array_sum()

$str="Hi i am Rikesh";
echo $str."<br/>";
var_dump(explode(" ",$str));
echo"<br>";
$z=array("what","a","cool","day");
echo implode(" ",$z);
echo"<br>";
echo count($z);
echo"<br>";
$arr_num=array(23,78,2);
echo(array_sum($arr_num));
?>
    
</body>
</html>

