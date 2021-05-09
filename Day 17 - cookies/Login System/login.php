<?php
if(isset($_COOKIE['user_loggedin'])){
if($_COOKIE['user_loggedin'] === "1" ){
  header('location:index.php');
}
}
if(!(isset($_COOKIE['user_email']))){
  header('location:register.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG_IN</title>
    <link rel="stylesheet" href="./css/style1.css">
</head>
<body>
    <div class="container">
        <div class="image">
            <img src="./image/logo.png" alt="cwslogo">
        </div>
        <div class="form">
            <form action="logincontrol.php" method="POST">
                <h1>LOG IN</h1>
                <label for="email">Email</label><br/>
                <input type="email" name="email" id="username" placeholder="Email"><br/>
                <label for="password">Password</label><br/>
                <input type="password" name="password" id="password" placeholder="Password"><br/>
                <button type="submit" name="submit">Login</button>
            </form><hr/>
        </div>
    </div>
</body>
</html>