<?php
session_start();
$error=array();
//validation
if($_POST['email']==""){
    $error[]="email feild is requried";
}
if($_POST['name']==""){
    $error[]="name feild is requried";
}
if($_POST['password']==""){
    $error[]="passsword is requried";
}
if(count($error)>0){
    foreach($error as $key=>$value){
        echo $value;
        echo"<br/>";
    }
    echo"<a href='register.html'>Register</a>";
    exit(0);
}

if($_POST['email']!=="" && $_POST['name']!==""&&$_POST['password']!==""){
    $_SESSION["user_email"]=$_POST["email"];
    $_SESSION["user_name"]=$_POST["name"];
    $_SESSION["user_password"]=$_POST["password"];
    header('location:loginpage.php');
}