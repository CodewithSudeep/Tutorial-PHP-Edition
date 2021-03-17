### PHP Constants
##### "What are constant in PHP?"

Constants are like variables except that once they are defined they cannot be changed or undefined.

A constant is an identifier for a simple value. The value cannot be changed during the script.
A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Unlike variables, constants are automatically global across the entire script.

##### "Creating a constant"

To create a constant, use the define() function.
Syntax
```
define(name, value, case-insensitive)
```
Parameters:
name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false


#### "Creating a constant"

Example:
```
<?php 
    define("INTRO", "PHP is server side scripting language");
    define("SOFTWARE","we are using XAMPP");
    echo INTRO;
    echo software;
?>
```