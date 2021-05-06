<?php
session_start();
$error =array();

 if ($_POST["email"]==""){
     $error[] = "email is required";
}

if ($_POST["password"]==""){
    $error[] = "password is required";
}
if (count($error)>0){
    foreach ( $error as $key => $value){
        echo $value;
        echo "<br/>";
    }
    echo "<a href='login.html'>Login</a>";
    exit(0);
}

if ($_POST['email']!=="" && $_POST['password']!==""){
    if (  $_SESSION["user_email"] != $_POST["email"]){
        echo "email not found!!";
        exit(0);
    }
    else{
        if( $_SESSION["user_password"] != $_POST["password"] ){
            echo "password not matched!!";
            exit(0);
        }else{
            echo "you are logged in";
            $_SESSION["user_loggedin"]=true;
        }
    }
}