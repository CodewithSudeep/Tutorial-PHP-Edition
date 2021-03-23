<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//create an associative array with the following key and value
// name = yourname
// address = your address
// username = your username
// password = a password
// phone = your phone number
// email = your email.
$my_array=array("name"=>"Aadarsha Bhattarai","address"=>"Kathmandu","username"=>"aadarsha1","password"=>"abcd2020","phone"=>"+9779840150573","email"=>"aadrahbhatt@gmail.com");

// print the element of array in HTML table

?>
<table style="border:5px solid black;width:100%;">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Username</th>
        <th>password</th>
        <th>phone</th>
        <th>email</th>
    </tr>
    <tr>
        <th><?php echo $my_array["name"] ?></th>
        <th><?php echo $my_array["address"] ?></th> 
        <th><?php echo $my_array["username"] ?></th>
        <th><?php echo $my_array["password"] ?></th>
        <th><?php echo $my_array["phone"] ?></th>
        <th><?php echo $my_array["email"] ?></th>
    </tr>
</table>
</body>
</html>