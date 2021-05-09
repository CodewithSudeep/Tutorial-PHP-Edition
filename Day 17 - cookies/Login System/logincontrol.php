<?php

$error = array();
//base64_encode($_SESSION['user_password']);
if($_POST['email']==""){
    $error[] = "Email field is empty!";
}
if($_POST['password']==""){
    $error[] = "password is required";
}
if(count($error)>0){
    foreach($error as $key => $value){
        echo $value;
        echo "<br/>";
    }
    echo "<a href='login.php'>Login</a>";
    exit(0);
} 


//registrion
if($_POST['email']!=="" && $_POST['password'] !== "" ){
   if($_COOKIE['user_email']!=$_POST['email']){
       echo "Email not found!";
       exit(0);
   }else{
   if($_COOKIE['user_password']!=$_POST['password']){
    echo "password incorrect!";
    exit(0);
}else{
    if(isset($_COOKIE['user_loggedin'])){
        setcookie("user_loggedin", "",time()-3600,"/");
        setcookie("user_loggedin","1",strtotime('+30 days'),"/");
        header('location:index.php');
    }else{
        setcookie("user_loggedin","1",strtotime('+30 days'),"/");
       //echo "loggedin";
      //echo $_COOKIE['user_loggedin'];
      header('location:index.php');}
   
    }
   }
 }
?>