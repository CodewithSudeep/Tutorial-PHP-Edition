<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,td,th{
        border:1px solid white;
        border-collapse:collapse;
    }
    table th {
        background-color:black;
        color:white;
    }
    </style>
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
$info = array("name"=>"Bibek","address"=>"Ilam","username"=>"bibek117","password"=>"abc123","phone"=>"123456789","email"=>"abc@gmail.com");

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
        <th><?php echo $info['name'] ?></th>
        <th><?php echo $info['address']?></th> 
        <th><?php echo $info['username']?></th>
        <th><?php echo $info['password']?></th>
        <th><?php echo  $info['phone'] ?></th>
        <th><?php echo  $info['email'] ?></th>
    </tr>
</table>
</body>
</html>