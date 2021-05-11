<?php
if(!(isset($_COOKIE['user_loggedin'])&&$_COOKIE['user_loggedin']==="1")){
    header("location:loginpage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
<div class="container">
<h2 class="title">Welcome Here
    <?php echo $_COOKIE['user_name'];?>
</h2>
<h4>your details</h4>
<p>username :<?php Echo $_COOKIE['user_name'];?>
</p>
<p>email:<?php echo $_COOKIE['user_email'];?></p>
<p>password:<?php echo base64_encode($_COOKIE['user_password']);?>
</p>
<div class="btn">
<a href="logout.php"><input type="button" name="logout" value="logout" ></a>
<a href="deletedata.php"><input type="button" value="deletedata" name="deletedata"></a>
</div>
</div>
    
</body>
</html>