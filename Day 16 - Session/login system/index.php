<?php
session_start();
//middleware
if($_SESSION["user_logged_in"]!=true){
    header("location:loginpage.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: rgb(59, 16, 214);
        }
         .container{
            background: white;
            margin: 150px 500px 10px 500px;
            font-style: Sans-serif;
        }
        
        h3{
            text-align:center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h4><?php echo "Welcome ",$_SESSION["user_name"];  ?></h4>
        <p><b>Your details:</b> </p>
        <p> <?php echo "Username: ",$_SESSION["user_name"]; ?> </p>
        <p> <?php echo "Email: ",$_SESSION["user_email"]; ?> </p>
        <p> <?php echo "Password:",base64_encode('user_password'); ?> </p>
        <div class="button">
            <br>
            <a href='logout.php'><input type="button" name="logout" value="Logout"></a>
            <a href='delete.php'><input type="button" name="delete" value="Delete Acount"></a>
        </div>
    </div>
    
</body>
</html>

