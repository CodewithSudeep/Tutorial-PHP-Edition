<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<<<<<<< HEAD
  First Name: <input type="text" name="fname">
  Last Name: <input type="text" name="fname">

  <input type="submit">
=======
  First Name: <input type="text" name="fname"><br>
  Last Name: <input type="text" name="lname">
<br>
  <input type="submit" name="submit">
>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5
</form>

<?php

#check if request method is post
<<<<<<< HEAD

# get the value of first name

#get the value of last name
=======
if($_SERVER["REQUEST_METHOD"]=='POST'){
# get the value of first name
$_firstname=$_REQUEST['fname'];
#get the value of last name
 $_lastname=$_REQUEST['lname'];
$_firstname.=$_lastname;
if(empty($_firstname)){
  echo "You entered nothing";
}else{
  echo $_firstname;
}
}
>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5

#print first name and last name

?>

</body>
<<<<<<< HEAD
</html>
=======

</html>
>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5
