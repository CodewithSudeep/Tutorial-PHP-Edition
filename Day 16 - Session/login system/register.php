<?php 
session_start();
$error= array();

//validation
if($_POST['email']==""){
    $error[]="Email  is required";
}
if($_POST['username']==""){
    $error[]="Username is required";
}
if($_POST['password']==""){
    $error[]="Password  is required";
}

if(count($error)>0){
    foreach ( $error as $key => $value ){
        echo $value,"<br>";
    } 
    echo "<a href='register.html'>Register</a>";
    exit(0);
}

if($_POST['email']!=="" && $_POST['password']!=="" && $_POST['username']!==""){
    $_SESSION["user_email"]=$_POST['email'];
    $_SESSION["user_name"]=$_POST['username'];
    $_SESSION["user_password"]=$_POST['password'];
    echo "Registration Successful <br> Please login with your username and password.";
    echo "<a href='login.html'>Login</a>";
}


?>