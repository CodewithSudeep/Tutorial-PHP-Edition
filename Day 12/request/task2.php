<html>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  First Name: <input type="text" name="fname"> <br>
  Last Name: <input type="text" name="lname"> <br>  

  <input type="submit" name="submit">
</form>

<?php

#check if request method is post

# get the value of first name

#get the value of last name

#print first name and last name

if($_SERVER["REQUEST_METHOD"]== "POST"){

  $name = $_POST["fname"];
$lastname = $_POST["lname"];
  if(isset($_POST["submit"]))
  {
    if(empty($name)){
      echo "name is empty";
    }

    else{
      echo $name ;
      echo "<br/>";
      echo $lastname;
    }
  }


}



?>

</body>
</html>