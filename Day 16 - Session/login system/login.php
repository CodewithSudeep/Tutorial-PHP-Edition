<?php


session_start();
$error=array();
if($_POST["email"]==""){
    $error[]="Email field is required";
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
    echo"<a href ='loggin.php'>Register</a>";
    exit(0);
}
if($_POST["email"]!="" && $_POST["password"]!="")
{
    if($_SESSION["user_email"]!=$_POST["email"])
    {
        echo"Email not found";
        echo"<a href='loggin.php'><button type='button'>Try!again</button></a>";
        echo"<a href='register.html'><button type='button'>Register</button></a>";

        exit(0);
        
    }
    else{
    if($_SESSION["user_password"]!=$_POST["password"])
    {
        echo"Password not match<br>";
        echo"<a href='loggin.php'><button type='button'>Try!again</button></a>";
        echo"<a href='register.html'><button type='button'>Register</button></a>";
        exit(0);
    }
    else{
        $_SESSION["user_loggedin"]=true;
        header('location:index.php');
        }
    }
}
