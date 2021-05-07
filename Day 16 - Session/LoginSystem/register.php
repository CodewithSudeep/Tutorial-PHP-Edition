<?php
session_start();
$error = array();
//validation

if ($_POST['email']=="") {
   $error[] = "Email is required";
}
if($_POST["name"]==""){
    $error[] = "Name is required";
}
if($_POST["password"]==""){
    $error[] = "Password is required";
}

//error handling 

if (count($error)>0) {
   foreach ($error as $key => $value) {
        echo $value;
        echo "<br/>";
   }
   echo "<a href='register.html'>Register</a>";
   exit(0);
}

//registration

if ($_POST['email']!=="" && $_POST['name']!=="" && $_POST['password']!=="") {
    $_SESSION["user_email"] = $_POST["email"];
    $_SESSION["user_name"] = $_POST["name"];
    $_SESSION["user_password"] = $_POST["password"];
    // echo "Registeration successful. <br/> Please login with your username and password<br/>";
    // echo "<a href='login.html'>Login</a>";
    header('location:loginpage.php');
}
