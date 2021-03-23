## PHP Conditional Statements

Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

- if statement - executes some code if one condition is true

- if...else statement - executes some code if a condition is true and another code if that condition is false

- if...elseif...else statement - executes different codes for more than two conditions

- switch statement - selects one of many blocks of code to be executed

### PHP - The if Statement

The <code>if</code> statement executes some code if one condition is true.

Syntax:
```
if (condition) {
  code to be executed if condition is true;
}
```
Example:
```
Output "Have a good day!" if the current time (HOUR) is less than 20:

<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
?>
```

### PHP - The if...else Statement
The <code>if...else</code> statement executes some code if a condition is true and another code if that condition is false.

Syntax:
```
if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
}
```

Example:
```
Output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise:

<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
```
### PHP - The if...elseif...else Statement

The <code>if...elseif...else</code> statement executes different codes for more than two conditions.

Syntax:

```
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}
```

Example
```
Output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":

<?php
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
```





