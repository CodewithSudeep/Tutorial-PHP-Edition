<?php


//make two variable for username and password

$username = "raj tuladhar";//string
$password= "helobaby";//string
# create a form wich takes username and password
#check the U/P provided through form matches with variables or not
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["submit"])){
        $fusername=$_POST["name"];
        $fpassword=$_POST["password"];
        if($fusername==$username&& $fpassword==$password)
        echo"you are log in";
        else{
            echo "incorrect password";
        }
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
<form action="task4.php" method="post">
username: <input type="text" name="name">
password: <input type="password" name="password">
<input type="submit" value="submit" name="submit"> 
</form>
    
</body>
</html>
