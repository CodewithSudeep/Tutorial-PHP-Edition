
<?php
session_start();
$error=array();
//validation
if($_POST['email']==""){
    $error[]="email feild is requried";
}
if($_POST['password']==""){
    $error[]="passsword is requried";
}
if(count($error)>0){
    foreach($error as $key=>$value){
        echo $value;
        echo"<br/>";
    }
    echo"<a href='login.html'>login</a>";
    exit(0);
}

if($_POST['email']!==""&& $_POST['password']!==""){
   if($_SESSION["user_email"]!= $_POST["email"]){
       echo"email not found";
       exit(0);
   }
   else{
      if($_SESSION["user_password"]!=$_POST["password"]){
          echo"password not matched!!";
          exit(0);
      }else{
          echo"You are logged in";
          $_SESSION["user_loggedin"]=true;
      }
   }
}