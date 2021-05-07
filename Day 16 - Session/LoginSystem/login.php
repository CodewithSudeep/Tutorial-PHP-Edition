<?php
session_start();


 
$error = array();
//validation

if ($_POST['email']=="") {
   $error[] = "Email is required";
}

if($_POST["password"]==""){
    $error[] = "Password is required";
}

if (count($error)>0) {
    foreach ($error as $key => $value) {
         echo $value;
         echo "<br/>";
    }
    echo "<a href='login.html'>login</a>";
    exit(0);
}

if ($_POST['email']!=="" && $_POST['password']!=="") {
    if ($_SESSION["user_email"] != $_POST["email"]) {
        echo "Email not found !!";
        exit(0);
    }else {
        if ($_SESSION["user_password"] != $_POST["password"]) {
            echo "Password not matched !!";
            exit(0);
        }else{
            echo "You are logged in";
            $_SESSION["user_loggedin"] = true;
            header("location:index.php");
        }
    }
}

