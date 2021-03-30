<?php


#create a form which takes the number and checks if it is palindrome or not


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindrome</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    
    give a number:<input type="text" name="num"><br>
    <input type="submit" name="submit"> 
    
    </form>

</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $number = $_POST["num"];
    // echo "hello";
$revrse = strrev($number);

if($number == $revrse)
{
    echo "the number is palindrome ";
}
else{
    echo "not palindrome!!";
}

}
?>