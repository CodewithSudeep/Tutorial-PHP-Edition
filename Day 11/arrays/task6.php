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
$info= array("Name"=>"",
"Name"=>"Pradip Kunwar",
"Address"=>"Ekantakuna,Lalitpur",
"Username"=>"Kun_Pradip",
"Password"=>"wx_7893st",
"Phone"=>"9813125888",
"Email"=>"pradipkunwar3332gmail.com"
);

// print the element of array in HTML table

?>
<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Username</th>
        <th>Password</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>
    <tr>
        <th><?php echo $info['Name'];  ?></th>
        <th><?php echo $info["Address"];   ?></th> 
        <th><?php echo $info["Username"];  ?></th>
        <th><?php echo $info["Password"];  ?></th>
        <th><?php echo $info["Phone"];  ?></th>
        <th><?php echo $info["Email"];  ?></th>
    </tr>
</table>
</body>
</html>