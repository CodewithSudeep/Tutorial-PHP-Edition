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

$details = array ("name" => "Sisam Gautam",
                  "address" => "Butwal",
                  "username" => "Sisamgtm07",
                  "password" => "Temporary123",
                  "phone" => "+977 9804444444",
                  "email" => "example21@gmail.com");

// print the element of array in HTML table

?>
<table border="1px" cellspacing="0" cellpadding="5">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Username</th>
        <th>password</th>
        <th>phone</th>
        <th>email</th>
    </tr>
    <tr>
        <th><?php echo $details['name']; ?></th>
        <th><?php echo $details['address']; ?></th>
        <th><?php echo $details['username']; ?></th>
        <th><?php echo $details['password']; ?></th>
        <th><?php echo $details['phone']; ?></th>
        <th><?php echo $details['email']; ?></th>

    </tr>
</table>
</body>
</html>