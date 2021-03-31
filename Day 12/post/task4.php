<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
    <label>Username:</label>
    <input type="text" name="username"> <br> <br>

    <label>Password</label>
    <input type="password" name="password"> <br> <br>

    <input type="submit" name="submit"> <br><br>

    </form>
</body>
</html>


<?php


//make two variable for username and password


# create a form wich takes username and password


#check the U/P provided through form matches with variables or not

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = "siamgtm07";
    $password= "temporary@123";
    if(isset($_POST['submit'])){
        $uname = $_POST['username'];
        $pass = $_POST['password'];

        if($uname == $username && $pass == $password){
            echo "Successful";
            
        }
        else{
            echo "Invalid";
        }
    }
}
?>