Prepared by : [Garima KC](https://github.com/GarimaKC11) 
#  **Advance Calculator using PHP**

![introduction](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/a6185f513d7b70b2289525c77158c2ac79c68ce6/Advance%20Calculator/screenshots/introduction.PNG)

-  Just like Basic Calculator,you can create an Advance Calculator by PHP.
- The Advance Calculator In PHP is a simple project for solving the mathematical calculations of different numbers. 
- You can see the basic features of the scientific calculator in this project.

## Features:
 In addition to the feature provided by **Basic Calculator** ,it provides following features:

 **1.Arithmetic operations**
 **2.trigonometric operations**
 **3.logarithmic operations**
 **4.base conversion**

### 1. Arithmetic operations  *(Refer to Basic Calculator)*
- Addition
- Subtraction
- Multiplication
- Division
- Modulus
- Exponential

![Feature arithmetic](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/a6185f513d7b70b2289525c77158c2ac79c68ce6/Advance%20Calculator/screenshots/calc%20operation%201.PNG)

### 2. Trigonometric operations
- Sine of number
- Cosine of number
- Tangent of number

![feature trigonometric](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/a6185f513d7b70b2289525c77158c2ac79c68ce6/Advance%20Calculator/screenshots/calc%20operation%202.PNG)

### 3. Logarithmic operations
- Natural log 
- Log10
- e (Exponent)

![feature logarithmic](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/a6185f513d7b70b2289525c77158c2ac79c68ce6/Advance%20Calculator/screenshots/calc%20operation%203.PNG)

### 4.Base Conversion:
- Decimal to Binary
- Decimal to Hex
- Decimal to Oct
- Hex to Decimal
- Oct to Decimal
- Binary to Decimal
- Radian to Degree
- Degree to Radian

![feature conversion](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/a6185f513d7b70b2289525c77158c2ac79c68ce6/Advance%20Calculator/screenshots/calc%20operation%204.PNG)

## PHP concept used:
- **Arithmetic operations**:Same like in Basic Calculator,it consists of operations like ```+,-,/,%```

- **Conditional statement and decision making**:You want to perform different actions for different conditions. You can use conditional statements like if  in your code to do this.     

- **Superglobals**: Superglobals can always beaccessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.  
we will use ```$GLOBALS``` ```$_GET``` ```$_POST``` ```$_REQUEST```

- **PHP math** : PHP has a set of math functions that allows you to perform mathematical tasks on numbers. The PHP math functions are part of the PHP core. No installation is required to use these functions. 
some php math functions are:

   ***For arithmetic operation:***
   
   ```fmod() ->	Returns the remainder of x/y```
   
   ```exp()  ->	Calculates the exponent of e```
   
   ***For trigonometric operation:***
   
   ```sin() -> 	Returns the sine of a number```
   
   ```cos() -> 	Returns the cosine of a number```
   
   ```tan() -> 	Returns the tangent of a number```
   
   ***For base conversion***
   
   ```decbin() ->	Converts a decimal  to a binary ```
   
   ```dechex() -> Converts a decimal  to a hexadecimal ```
   
   ```decoct() -> Converts a decimal  to an octal ```
   
   ```hexdec() -> Converts a hexadecimal number to a decimal ```
   
   ```deg2rad() ->	Converts a degree value to a radian ```
   
  ***- For logarithmic opertion***
  
  ``` log()  -> 	Returns the natural logarithm of a number```
  
  ```log10() -> Returns the base-10 logarithm of a number```
  
  ```log1p() -> Returns log(1+number)```
  



 *For complete reference visit: [w3schools](https://www.w3schools.com/php/php_ref_math.asp) for more php math functions.* 



## Working mechanism:

#### I.HTML Part:
**1. We have a multiple-tab HTML form.**

**2. Label is created under form column to insert operands: numbers and one label to insert operator: ```'+', '-','/','%', '**',sin,cos,tan,bin-dec,rad-deg,Natural log``` and so on..**

**3. Each type of operation is done in separate form by switching the active form.**


#### II.PHP Part

**4. HTML Form Handing is used to get data from the url. In this case, it is used to accept inputs like operand and operator for operations like ```'+', '-','/','%', '**',sin,cos,tan,bin-dec,rad-deg,Natural log```through POST method.**

 ```
 #PHP script for handling the form request

 #checking for post request
if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $operand1 = $_POST["operand1"];
    $operand2 = (isset($_POST["operand2"])) ? $_POST["operand2"] : null;
    $operator = $_POST["operator"];
    $raw="";
    $result="";
    
 ```

**5. After form submission, **in PHP**, at first, the type of operation is determined( if condition, superglobal).**
 
```
<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {} #check avaiability  of post request

if (isset($_POST["arithmetic"])) {
    # check if arithmetic operation is to be done
    #handle "division by zero error" using if condition inside switch case
}


if (isset($_POST["trignometric"])) {
    # check if arithmetic operation is to be done
    
}

if (isset($_POST["conversion"])) {
    # check if arithmetic operation is to be done
}

if (isset($_POST["logarithmic"])) {
    # check if arithmetic operation is to be done
}
 ```

**6. Once the type of operation is obtained, we perform each operation in separate if statement block as highlighted below:**


**6(a).For Arithmetic operation** *(Refer to basic calculator)*
- we will use switch case to perform arithmetic operation of given inputs.
-  Math functions used here are:

``` fmod() ->	Returns the remainder of x/y```

   ```exp()  ->	Calculates the exponent of e```
```
switch ($operator) {
            case '+':
                $result = $operand1+$operand2;
                break;
            case '-':
                $result = $operand1-$operand2;
                break;
            case '*':
                $result = $operand1*$operand2;
                break;
            case '/':
                $result = $operand1/$operand2;
                break;
            case '%':
                $result = $operand1%$operand2;
                break;
            case '**':
                $result = $operand1**$operand2;
                 break;
            default:
               $result = "Operation not allowed";
                break;
        }
 ```

**6(b)For trigonometric function:**
- In a if block, all trignometric operations can be operated by specifying operand as constant and radian whereas operator to be  math functions:``sin,cos,tan``
- Math functions used here are:

 ``` For trigonometric operation:```
 
 ```sin() -> 	Returns the sine of a number```
 
 ```cos() -> 	Returns the cosine of a number```
 
 ```tan() -> 	Returns the tangent of a number```
 
 ```deg2rad() ->	Converts a degree value to a radian ```


```
if (isset($_POST["trignometric"])) {
        #in case of trignometric function operand1 is treated as constant, operand2 is value of radian
        # operator have 3 string value for math functions: sin,cos,tan
        if (is_numeric($operand1) && is_numeric($operand2)) {
            // changing value into radian
            $operand2_angle= deg2rad($operand2);
            #final step
            switch ($operator) {
                case 'sin':
                    $result = $operand1*(sin($operand2_angle)); //math function sin(radianvalue);
                    $raw=$operand1."sin(".$operand2.")";
                    break;
                case 'cos':
                    $result = $operand1*(cos($operand2_angle));
                    $raw=$operand1."cos(".$operand2.")";
                    break;
                case 'tan':
                    $result = $operand1*(tan($operand2_angle));
                    $raw=$operand1."tan(".$operand2.")";
                    break;
                default:
                $result = "Operation not allowed";
                $row="Error";
                    break;
            }

            if ($result) {
                $final = "$raw = ".$result;
            }
        
        }else{
            $final = "Error : Given operand is non numeric";
        }
    
    }
```
**6(c)For Conversion Operation:**
 - In case of conversion operation,operand1 is treated as number and operator have total 8 string values of conversion i.e.
``Dec-Bin``

``Dec-Hex``

``Dec-Oct``

``Hex-Dec``

``Oct-Dec``

``Bin-Dec``

``Rad-Deg``

``Deg-Rad``

 
- Math functions used here are:

 ***For base conversion***
 
   ```decbin() ->	Converts a decimal  to a binary ```
   
   ```bindec() -> Converts a binary to decimal```
   
   ```dechex() -> Converts a decimal  to a hexadecimal ```
   
   ```hexdec() -> Converts a hexadecimal to decimal```
   
   ```decoct() -> Converts a decimal  to an octal ```
   
   ```octdec -> Converts a octal to a decimal```
   
   ```deg2rad() ->	Converts a degree value to a radian ```
   
   
```
if (isset($_POST["conversion"])) {
        #in case of conversion operation operand1 is treated as number
        # operator have total 8 string value for math functions
        if (is_numeric($operand1)) {
        
            #final step
            switch ($operator) {
                case 'bindec':
                    
                    $result = bindec($operand1);
                    $raw="(".$operand1.")<sub>2</sub> = (". $result .")<sub>10</sub>";
                    break;
                case 'decbin':
                    $result = decbin($operand1);
                    $raw="(".$operand1.")<sub>10</sub> = (". $result .")<sub>2</sub>";
                    break;
                case 'dechex':
                    $result = dechex($operand1);
                    $raw="(".$operand1.")<sub>10</sub> = (". $result .")<sub>16</sub>";
                    break;
                case 'hexdec':
                    $result = hexdec($operand1);
                    $raw="(".$operand1.")<sub>16</sub> = (". $result .")<sub>10</sub>";
                    break;
                case 'decoct':
                    $result = decoct($operand1);
                    $raw="(".$operand1.")<sub>10</sub> = (". $result .")<sub>8</sub>";
                    break;
                case 'octdec':
                    $result = octdec($operand1);
                    $raw="(".$operand1.")<sub>8</sub> = (". $result .")<sub>10</sub>";
                    break;
                case 'rad2deg':
                    $result = rad2deg($operand1);
                    $raw="(".$operand1.")<sub>radian</sub> = (". $result .")<sub>degree</sub>";
                    break;
                case 'deg2rad':
                    $result = deg2rad($operand1);
                    $raw="(".$operand1.")<sub>degree</sub> = (". $result .")<sub>radian</sub>";
                    break;
                
                default:
                $result = "Operation not allowed";
                $row="Error";
                    break;
            }

            if ($result) {
                $final = $raw;
            }
        
        }else{
            $final = "Error : Given operand is non numberic";
        }
    }
``` 
**6(d)For Logarithmic Operation:**   
- In case of logarithmic operation, operand1 is constant, operand2 is the value of number of which natural log is to be find and operator have  3 string value for math functions:log, log10 and exp.

``` log()  -> 	Returns the natural logarithm of a number```

  ```log10() -> Returns the base-10 logarithm of a number```
  
   ```exp()  ->	Calculates the exponent of e```

```

  # logarithmic operation

    if (isset($_POST["logarithmic"])) {
        # operand1= constant, operand2 is value of number of which natural log is to be find
        # operator have 3 string value for math functions: log,log10,exp
        if (is_numeric($operand1) && is_numeric($operand2)) {
            
            #final step
            switch ($operator) {
                case 'log':
                    $result = $operand1*(log($operand2));
                    $raw=$operand1."log(".$operand2.")";
                    break;
                case 'log10':
                    $result = $operand1*(log10($operand2));
                    $raw=$operand1."log10(".$operand2.")";
                    break;
                case 'exp':
                    $result = $operand1*(exp($operand2));
                    $raw=$operand1."x".strtoupper($operand2)."<sup>e</sup>";
                    break;
                default:
                $result = "Operation not allowed";
                $row="Error";
                    break;
            }

            if ($result) {
                $final = "$raw = ".$result;
            }
        
        }else{
            $final = "Error : Given operand is non numberic";
        }
    
    }

}
```
As demonstrated above,  we use the concept of PHP math library. It contains number of mathematics functions. 
*For complete reference visit: [w3schools](https://www.w3schools.com/php/php_ref_math.asp) for more php math functions.* 

## Demo Result: 
Some screenshots of results are uploaded below:
##### 1.Arithmetic operations:
- **Addition**

![Add](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%201%20add.PNG)

- **Subtraction**

![subtraction](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%201%20sub.PNG)

- **Multiplication**

![Multiplication](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%20multiply.PNG)

- **Division**

![Division](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%20div..PNG)

- **Modulus**

![Mod](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result1%20mod.PNG)

- **Exponential**

![Exp](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%201%20expo.PNG)

##### 2.Trigonometric Operations:
- **Sin**


![sin](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%202%20sin.PNG)

- **Cos**

![cos](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%202%20cos.PNG)

- **Tan**

![tan](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%202%20tan.PNG)

 ##### 3.Base Conversion
- **Binary to decimal**

![bin-dec](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%203%20bin%20dec.PNG)

- **Decimal to Binary**

![dec-bin](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%203%20%20dec%20bin.PNG)

- **Decimal to hexadecimal**

![dec-hex](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%203%20dec%20hex.PNG)

- **Hexadecimal to Decimal**

![hex-dec](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%203%20hex%20dec.PNG)

- **Decimal to Octal**

![dec-oct](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%203%20dec%20oct.PNG)

- **Octal to Decimal**

![oct-dec](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%203%20oct%20dec.PNG)

- **Degree to Radian**

![deg-rad](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%203%20dec%20rad.PNG)

- **Radian to degree**

![rad-deg](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%203%20rad%20deg.PNG)

##### 4. Logarithmic Operation
 - **Natural log**
![natural log](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%204%20nat%20log.PNG)

-**Log 10- Base 10**
![Base 10](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%204%20base%2010.PNG)

- **Ye - Exponent**
![expo](https://raw.githubusercontent.com/CodewithSudeep/Tutorial-PHP-Edition/main/Advance%20Calculator/screenshots/result%204%20exp.PNG)

