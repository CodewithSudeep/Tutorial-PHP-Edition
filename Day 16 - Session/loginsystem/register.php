<?php
session_start();
$error = array();
//var_dump($_POST);

//validation
if($_POST['email']==""){
    $error[] = "Email field is empty!";
}
if($_POST['username']==""){
    $error[] = "Username is required";
}
if($_POST['password']==""){
    $error[] = "password is required";
}
if(count($error)>0){
    foreach($error as $key => $value){
        echo $value;
        echo "<br/>";
    }
    echo "<a href='register.html'>Register</a>";
    exit(0);
} 


//registrion
if($_POST['email']!=="" && $_POST['username'] !== "" && $_POST['password'] !== "" ){
  $_SESSION['user_email'] = $_POST['email'];
  $_SESSION['user_name'] = $_POST['username'];
  $_SESSION['user_password'] = $_POST['password'];
   echo "Registration successful<br/> Please login with username and password";
 echo "<a href='loginpage.php'>login</a>";
 // header('location:login.php');
}

?>