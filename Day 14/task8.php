
<?php
// create a html form with twi inputs for first name and last name;
// create 3 function: 
// 1. concate first name and last
// 2. calculates the length of first name and last name
// 3. returns the reverse of first name and last name

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    echo "$fname"."<br>"."$lname"."<br>";
    function concat_name($fstname,$lstname)
    {
        $fstname.=$lstname;
        return $fstname;
    }
    function len_name($fstname,$lstname)
    {
        $fstname_len=strlen($fstname);
        $lstname_len=strlen($lstname);
        echo "Length Of ".$fstname."=".$fstname_len."<br>";
        echo "Length Of ".$lstname."=".$lstname_len."<br>";
    }
    function rev_name($fstname,$lstname)
    {
        $fstname_rev=strrev($fstname);
        $lstname_rev=strrev($lstname);
        echo "Reverse Of ".$fstname."=".$fstname_rev."<br>";
        echo "Reverse Of ".$lstname."=".$lstname_rev."<br>";
    }
    echo $fname."+".$lname."=".concat_name($fname,$lname)."<br>";
    len_name($fname,$lname);
    rev_name($fname,$lname);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="task8.php">
        First Name:<input type="text" name="fname"/><br>
        Last Name:<input type="text" name="lname"?><br>
        <input type="submit" name="submit">
    </form>
</body>
</html> 