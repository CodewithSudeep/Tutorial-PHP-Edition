
<?php
session_start();

if(!(isset($_SESSION['user_name']))){
  header('location:register.html');
}
if(isset($_SESSION['user_loggedin'])){
  if($_SESSION['user_loggedin']==true){
    header('location:index.php');
  }
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <title>Login</title>
</head>
<body>
    <div class="container mt-5 col-md-6">
        <h4>login</h4>
<form method="POST" action="login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
  
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>