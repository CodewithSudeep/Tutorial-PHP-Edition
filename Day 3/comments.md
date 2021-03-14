### PHP comments
A comment is non-executable lines. a comment is used to write the description for your own understanding. The browser doesn't read the comments. 

There are two types of comments used in PHP.

## 1. Single line comments :
Single line comment used for short explanations. Declaration of Single line comment are two types either Begin with(#) Or backslash(//) 

```
<?php

# This is the single line comment

# This is the next line comment

// This is also a single line comment.

?>
```

In the above Example. *First and second line comments begin with hash(#). *The third one is begin with(//).

If we check the output of the given example. Browser show blank page. Because comments are always non-executable..  


another Eg of Single line Comment
```
<?php
  	
$str= "welcome ";

//$str. =" student";

echo $str;  

?>
```
Output welcome
In the above Example. We declare a variable to store the String("welcome") In second line we concatenate string("student") with the Previous string("welcome") In third line we check the output.It shows Welcome Only. Because the second line statement has already specify a comment statement. So it can't take the string("student") as a declaration.

## 2. Multi-lines comments :
Multi lines comments  used to comment multiple lines. Here we can give comments in bulk The bulk comments are enclose within (/*.....*/)

```
<?php
 	
/* 

This is a comment with multiline 

Developer : sanjeev rai 

view : Multiline Comments Demo 

*/

?>
```
The all lines which is define in php evironment are Multiline comments. it is non-executable.Because it enlose with Multiline comments statement.
