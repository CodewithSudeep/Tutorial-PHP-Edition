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


$my_details = array("name"=>"Rikesh shrestha","address"=>"kusunti","username"=>"rikesh-a11","pw"=>"riksum890","phone"=>"9880671393","email"=>"rikeshshrestha499@gmail.com");

// print the element of array in HTML table

?>
<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Username</th>
        <th>password</th>
        <th>phone</th>
        <th>email</th>
    </tr>
    <tr>
        <th><?php echo $my_details["name"] ?></th>
        <th><?php echo $my_details["address"]?></th> 
        <th><?php echo $my_details["username"]?> </th>
        <th> <?php echo $my_details["pw"]?></th>
        <th><?php echo $my_details["phone"]?></th>
        <th><?php echo $my_details["email"]?></th>
    </tr>
</table>
</body>
</html>