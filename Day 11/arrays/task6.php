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
$array = array("name"=>"sarbendra sigdel",
"address"=>"thankot",
"username"=>"sarbendrasigdel541",
"password"=>"flower123",
"phone"=>"9860672399",
"email"=>"sarbendrasigdel1232@gmail.com");


// print the element of array in HTML table

?>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Username</th>
        <th>password</th>
        <th>phone</th>
        <th>email</th>
    </tr>
    <tr>
        <th><?php echo $array['name'] ?></th>
        <th><?php echo $array['address'] ?></th> 
        <th><?php echo $array['username'] ?></th>
        <th><?php echo $array['password'] ?></th>
        <th><?php echo $array['phone'] ?></th>
        <th><?php echo $array['email'] ?></th>
    </tr>
</table>
</body>
</html>