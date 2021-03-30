<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  First Name: <input type="text" name="fname"/>
  Last Name: <input type="text" name="lname"/>

  <input type="submit"/>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  
  $fstname=$_REQUEST["fname"];
  $lstname=$_REQUEST["lname"];
  $fstname.=$lstname;
  echo $fstname;
}
#check if request method is post

# get the value of first name

#get the value of last name

#print first name and last name

?>

</body>
</html>