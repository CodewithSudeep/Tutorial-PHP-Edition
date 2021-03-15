## PHP Variable 
Creating a variable
In PHP, a variable starts with the $ sign, followed by the name of the variable:
```
<?php
 $text = "hello"; //string
 $number = 12; //integer
 $marks = 45.76 //float
?>
```
### Rules for PHP variables:

- A variable starts with the $ sign, followed by the name of the variable
- A variable name must start with a letter or the underscore character
- A variable name cannot start with a number
- A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variable names are case-sensitive ($$age$ and $AGE are two different variables)

### "PHP is a Loosely Typed Language"

In the previous example, notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

### "Data type declaration"

In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

### "Display a variable"
```
<?php
    $text = "hello"; //string
    $number = 12; //integer
    $marks = 45.76 //float

    //printing
    echo  $text;
    echo $number;
    echo $marks;
?>
```