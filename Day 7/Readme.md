## PHP Numbers

One thing to notice about PHP is that it provides automatic data type conversion.

So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. Then, if you assign a string to the same variable, the type will change to a string.

This automatic conversion can sometimes break your code.

## PHP Integers

"An integer is a number without any decimal part."

An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. 

A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.

##### "Rules for integers"

- An integer must have at least one digit
- An integer must NOT have a decimal point
- An integer can be either positive or negative
- Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)


###### "Deeper"

PHP has the following predefined constants for integers:
- PHP_INT_MAX - The largest integer supported
- PHP_INT_MIN - The smallest integer supported
- PHP_INT_SIZE - The size of an integer in bytes

PHP has the following functions to check if the type of a variable is integer:
- is_int()
- is_integer() - alias of is_int()
- is_long() - alias of is_int()

## PHP Floats

A float is a number with a decimal point or a number in exponential form.
2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.
The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent) and have a maximum precision of 14 digits.
PHP has the following functions to check if the type of a variable is float:
- is_float()
- is_double() 

## PHP Infinity

A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

- is_finite()
- is_infinite()

## PHP NaN

NaN stands for Not a Number.
NaN is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:
- is_nan()


