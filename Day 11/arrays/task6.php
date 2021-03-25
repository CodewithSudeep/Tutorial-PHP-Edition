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

 $arr['name'] = "raj tuladhar";
 $arr['address'] = "champpi";
 $arr['username'] = "messi razz";
 $arr['password'] = "idkmf";
 $arr['phone'] = "98512664";
 $arr['email'] = 'rashjhjsh@gamil.com';


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
        <th><?php echo $arr['name']; ?></th>
        <th><?php echo $arr['address']; ?></th> 
        <th><?php echo $arr['username']; ?></th>
        <th><?php echo $arr['password'];?></th>
        <th><?php echo $arr['phone'];?></th>
        <th><?php echo $arr['email'];?></th>
    </tr>
</table>
</body>
</html>