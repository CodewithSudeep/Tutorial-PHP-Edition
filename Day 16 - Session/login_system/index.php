<?php
session_start();

if(!(isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin']=== true))
{

    header('location: login.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Main page</title>
</head>
<body>
    


<div class="big">
<h1>Welcome <?php echo $_SESSION['user_name'];?> </h1>
<h3>YOUR INFORMATIONS</h3>
<br>
<br>
<div>
<p>NAME: <?php echo $_SESSION["user_name"] ;?></p> 
<br>

<p>E-MAIL: <?php echo $_SESSION["user_email"];?> </p>
<br>
<p>PASSWORD: <?php echo base64_encode($_SESSION["user_password"]); ?></p>

<br>
</div>

<div>
<a href="logout.php"><input type="button" value="Log out" name="logout"> </a>

<a href="delete.php"><input type="button" value="Delete account" name="delete"> </a>

</div>



</div>

</body>
</html>