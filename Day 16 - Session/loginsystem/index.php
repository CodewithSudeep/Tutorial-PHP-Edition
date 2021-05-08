
<?php
//user logged in or not
//check login
//logout button
//name email and hashpassword display
session_start();
if(!(isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin']===true)){
    header('location:loginpage.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="mainpage.css">
</head>
<body>
    <div class="container">
        <h1>Welcome <?php echo $_SESSION['user_name']; ?></h1>
          <h5>Your details</h5>
          <p>Username : <?php echo $_SESSION['user_name'];?></p>
          <p>Email : <?php echo $_SESSION['user_email'];?></p>
          <p>Password : <?php echo base64_encode($_SESSION['user_password']);?></p>
          <div class="btn">
          <a href='logout.php'><input type='button' name='logout' value='logout'></a> 
          <a href='deleteaccount.php'><input type='button' name='delete-account' value='Delete-account'></a>
          </div>

    </div>
</body>
</html>