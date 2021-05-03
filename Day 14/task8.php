<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="task8.php">
First name <input type="text" name="fname"><br>
Last name <input type="text" name="lname"><br>
<input type="submit" name="submit">
</form>

</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
//  
if(isset($_POST['submit'])){
    $fn=$_REQUEST["fname"];
    $ln=$_REQUEST["lname"];
    function concat($first,$last){
        return  $first." ".$last;
    }
    echo "<br><br><br>";
    $stri=concat($fn,$ln);
    echo $stri;
    function len($text){
        echo "The length of the string is ".strlen($text);
    }
    echo "<br>";
    len($stri);
    echo "<br>";
    function  rev($word){
         return strrev($word);
    }
    $reverse=rev($stri);
    echo "The reverse of string is : ",$reverse;
}
}
// create a html form with two inputs for first name and last name;
// create 3 function: 
// 1. concate first name and last
// 2. calculates the length of first name and last name
// 3. returns the reverse of first name and last name

?>
