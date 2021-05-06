<?php

session_start();
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
    echo "<a href='loginpage.php'>Login</a>";
    exit(0);
} 


//registrion
if($_POST['email']!=="" && $_POST['password'] !== "" ){
   if($_SESSION['user_email']!=$_POST['email']){
       echo "Email not found!";
       exit(0);
   }else{
   if($_SESSION['user_password']!=$_POST['password']){
    echo "password incorrect!";
    exit(0);
}else{
    $_SESSION['user_loggedin'] = true;
    header('location:index.php');
}
   }
}

?>