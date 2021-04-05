<html>
<body>

<<<<<<< HEAD
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit" name="submit">
</form>
=======

>>>>>>> 26c01a80f69f1ee92f8c2fedc59b7aea1547a3c1

<?php

#DEBUG

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
<<<<<<< HEAD
  if(isset($_GET['fname'])){
  $name = $_REQUEST['fname'];
=======
  $name = $_REQUEST['refrercode'];
>>>>>>> 26c01a80f69f1ee92f8c2fedc59b7aea1547a3c1
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
}
?>

</body>
</html>