<?php
//check user is not login or not

//login

//button,link--logout

//username,user emial,hahs passord
session_start();
if($_SESSION["user_loggedin"]!=true)
{
    header("location:login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <div class="container">
        <h2 class="title">Welcome <?php echo $_SESSION['user_name']; ?></h2>
          <h4>Your details</h4>
          <p>Username : <?php echo $_SESSION['user_name'];?></p>
          <p>Email : <?php echo $_SESSION['user_email'];?></p>
          <p>Password : <?php echo base64_encode($_SESSION['user_password']);?></p>
          <div class="btn">
          <a href='login.html'><input type='button' name='logout'value='logout'class="btn-1"></a> 
          <a href='deletedata.php'><input type='button' name='deletedata'value='deletedata' class="btn-2"></a> 
          </div>

    </div>
</body>
</html>
