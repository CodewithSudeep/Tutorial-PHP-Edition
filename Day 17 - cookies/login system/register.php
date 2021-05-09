<?php

$error=array();
if($_POST["email"]==""){
    $error[]="Email field is required";
}
if($_POST["fulname"]=="")
{
    $error[]="Name is required";
}
if($_POST["password"]=="")
{
    $error[]="Password is required";
}
if(count($error)>0)
{
    foreach($error as $key =>$value)
    {
        echo $value;
        echo "<br>";
    }
    echo"<a href ='register.html'>Register</a>";
    exit(0);
}
//registration
if($_POST["email"]!="" && $_POST["fulname"]!="" && $_POST["password"]!="")
setcookie("user_email",$_POST["email"],time()+86400*30,"/");
setcookie("user_name",$_POST["fulname"],time()+86400*30,"/");
setcookie("user_password",$_POST["password"],time()+86400*30,"/");
// echo "Resiteration successful.<br>please Login with your username and password<br>";
// echo"<a href ='login.html'>Login</a>";
header('location:loggin.php');
?>