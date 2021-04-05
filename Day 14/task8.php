<?php

// create a html form with twi inputs for first name and last name;
// create 3 function: 
// 1. concate first name and last
// 2. calculates the length of first name and last name
// 3. returns the reverse of first name and last name
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

<form method="POST" action="task8.php">

NAME: <input type="text" name="firstname"><br><br>
LAST NAME: <input type="text" name="lastname">
 <input type="submit" name="submit" value="submit">


</form>
    
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{


if(isset($_POST["submit"]))
{
$name = $_POST["firstname"];
$lastname = $_POST["lastname"];

function conc($name,$lastname)
{
    return $name . $lastname  ;
}
  $merge  =     conc($name,$lastname);
echo $merge;
echo "<br/>";

function  length($str)
{

echo "length of  name is :" . strlen($str);

echo"<br/>";

}

length($merge);



function rev($str)
{
    return strrev($str);
echo "<br/>";
}


 echo "the reverse string is " . rev($merge);

}
}
?>