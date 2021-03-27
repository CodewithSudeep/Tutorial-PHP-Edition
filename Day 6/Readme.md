### PHP Strings

 A string is a sequence of characters, like "CodewithSudeep". Both double and single quotes are used to declare the string variables.

### creating string variable

```
<?php
    $string1 = "This is a string with double quotes";
    $string2 = 'This is a string with single quotes';
?>
```

### PHP String Functions
* strlen() - Return the Length of a String

```
<?php
echo strlen("Hello world!"); // outputs 12
?>
```

* str_word_count() - Count Words in a String

```
<?php
echo str_word_count("Hello world!"); // outputs 2
?>
```

* strrev() - Reverse a String

```
<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>
```

* strpos() - Search For a Text Within a String

    -  The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
 
```
<?php

    echo strpos("Hello world!", "world"); // outputs 6

?>
```

* str_replace() - Replace Text Within a String
```
<?php
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>
```


