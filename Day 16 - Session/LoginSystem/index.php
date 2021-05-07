<?php

//check user is logged in or not 

//login

//button,link -- logout 


// user name, user email, user ko hash password 

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
</head>
<body>
    <div class="container">
        <h1> Welcome <?php echo $_SESSION['user_name']; ?> </h1>
        <h3>Your details</h3>
        <p>username: <?php echo $_SESSION['user_name'];  ?> </p>
        <p>email: <?php echo $_SESSION['user_email']; ?>   </p>
        <p>password: <?php echo base64_encode($_SESSION['user_password']); ?>  </p>
        <div class="btn">
            <a href="logout.php">  <input type="button" name='logout' value="logout">   </a>
            <a href="deleteaccount.php">  <input type="button" name="delete-account" value='delete-account'>   </a>
        </div>

    </div>
</body>
</html>