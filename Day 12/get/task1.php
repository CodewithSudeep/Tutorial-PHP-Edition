<html>
<body>

<<<<<<< HEAD

=======
<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5

<?php

#DEBUG

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
<<<<<<< HEAD
  $name = $_REQUEST['refrercode'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
=======
  if(isset($_GET['fname'])){
    $name = $_REQUEST['fname'];
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }
  }
  

>>>>>>> 7563e80d81a9f5cc3eba01084e065eb963ffa2b5
?>

</body>
</html>