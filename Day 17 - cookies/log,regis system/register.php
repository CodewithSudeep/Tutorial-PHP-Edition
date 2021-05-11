<?php
$error=array();
//validation
if($_POST['email']==""){
    $error[]="email is required";
}
if($_POST['name']==""){
    $error[]="name is required";
}
if($_POST['password']==""){
    $error[]="password is required";
}
//error handling
if(count($error)>0){
    foreach($error as $key =>$value){
        echo $value;
        echo "<br/>";
    }
    echo"<a href='register.html'>register</a>";
    exit(0);
}
//registration
if($_POST['email']!==""&&$_POST['name']!==""&&$_POST['password']!==""){
    setcookie("user_email",$_POST['email'],time()+(86400*30),"/");
    setcookie("user_name",$_POST['name'],time()+(86400*30),"/");
    setcookie("user_password",$_POST['password'],time()+(86400*30),"/");
       echo "Registeration successful. <br/> Please login with your username and password<br/>";
    // echo "<a href='login.html'>Login</a>";
   header('location:loginpage.php');
    
}
