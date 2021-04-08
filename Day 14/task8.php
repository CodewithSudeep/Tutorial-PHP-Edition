<?php

// create a html form with twi inputs for first name and last name;
// create 3 function: 
// 1. concate first name and last
// 2. calculates the length of first name and last name
// 3. returns the reverse of first name and last name
function concat($f,$l){//1
    return($f.$l);
}
function len($fu){//2
    return strlen($fu);
}
function rev($name){//3
    return strrev($name);
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["name"])){
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        echo "first name =$fname<br/>";
        echo "last name =$lname<br/>";
        $fullname= concat($fname,$lname);
        echo "full name is $fullname <br/>";
        $length=len($fullname);
        echo "length =$length <br/>";
        $reverse= rev($fullname);
        echo $reverse;

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="task8.php" method="post">
first name: <input type="text" name="fname">
last namae: <input type="text" name="lname">
<input type="submit" value="submit" name="submit">


</form>
    
</body>
</html>

