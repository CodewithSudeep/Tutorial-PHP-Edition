<?php


//make two variable for username and password

$username = "sarbendrasigdel555";//string
$password= "flower";//string


# create a form wich takes username and password


#check the U/P provided through form matches with variables or not
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
<form method="POST" action="task4.php">
Username: <input type="text" name="user"> <br>
password: <input type="password" name="fpassword"> <br>
<input type="submit" name="submit">

</form>
    
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]== "POST"){
    if (isset($_POST["submit"])){

$us1 = $_POST["user"];
$pw = $_POST["fpassword"];

if($us1==$username && $pw == $password  )
{
    echo "login successful";
}

else{
    echo "incorrect username or password!";
}
    }
}