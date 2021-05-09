<?php
$error = array();
//validation

if ($_POST['email']=="") {
   $error[] = "Email feild is required";
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
//account will expire in 1 month

if ($_POST['email']!=="" && $_POST['name']!=="" && $_POST['password']!=="") {
   setcookie("user_name",$_POST['name'], strtotime( '+30 days' ),"/");
   setcookie("user_email",$_POST['email'], strtotime( '+30 days' ),"/");
   setcookie("user_password",$_POST['password'], strtotime( '+30 days' ),"/");
    // echo "Registeration successful. <br/> Please login with your username and password<br/>";
    // echo "<a href='login.php'>Login</a>";
    header('location:login.php');
}