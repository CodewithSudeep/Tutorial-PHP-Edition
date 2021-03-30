<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="task4.php">
     Username: <input type="text" name="userName"><br/>
     Password: <input type="password" name="passWord"><br/>
     <input type="submit" name="submit">
    </form>

<?php


//make two variable for username and password

$username = "bibek";
$password= "nepal123";

# create a form wich takes username and password
#check the U/P provided through form matches with variables or not
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['submit'])){
        $form_username = $_POST['userName'];
        $form_password = $_POST['passWord'];
      if($username==$form_username&&$password==$form_password){
          echo "Login successful";
      }else{
          echo "Incorrect details.Try again!";
      }
    }
}
?>
</body>
</html>
