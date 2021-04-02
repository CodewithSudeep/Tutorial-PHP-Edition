#  **Basic calculator using php**
 ## Introduction:
-  PHP is a popular general-purpose scripting language that is specially suited to web development. 
-  You can create a basic calculator by PHP.

## Operations:
 It performs basic arithmetic operations like:
 - **Addition**
 - **Subtraction** 
 - **Multiplication**
 - **Division**
 - **modulus**
 - **exponentiation**

## Concepts used:
You need to learn following concept to create a basic calculator:
- **Arithmetic operation**: how it functions.

- **switch** : The switch statement is similar to a series of IF statements on the same expression.


- **Form handling and  $_GETand $ _Post**:  This is used to get data from the url.

- **Super global variable** : **$_GLOBALS** : It is a superglobal variable which is used to access global variables from anywhere in the PHP script.




## Working Mechanism

### Algorithm:
1.Take two operands from HTMLform.
2.Take an operator from HTML form.
3.Perform arithmetic operations.
4.Display result.

### Steps: 
#### **Part I: HTML Part**
##### Steps:
1. First of all, html form is created which will send the data to itself.
2. Two  Label is created under form column to insert operands: numbers and one label to insert operator:'+', '-','/','%', '**'

#### **Part 2.: PHP part**
##### Steps:
3.HTML Form Handing is used to get data from the url. In this case, it is used to accept inputs like operand and operator for arithmetic operation through POST method.
```
if ($_SERVER['REQUEST_METHOD'] === 'POST')
```


4.Superglobal Variable which is used to access global variables from anywhere in the PHP script. Data retrieved from html can be accessed throughout the program.
    - isset checks if the variable is defined and also not NULL.  
    - is_numeric finds whether a variable is a number and not other than that.
    ```
    if (isset($_POST["calculate"]) && is_numeric($_POST["operand1"]) && is_numeric($_POST["operand2"]))    
    ```

 5.Type of operator and operand is determined by using if statement. For operand, numeric value is used whereas for operator, '+', '-','/','%', '**' are used. Data type other than these are shown undefined.


6.Finally, we will use switch case to perform arithmetic operation of given inputs.
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

7.Then, Result is displayed as an output by using php echo statement to print the output to the screen.
   
## DEMO RESULT
2+9=4
3*12=36
5-2=3
12/3=4
9%4=1
3**2=9

Contributor :  [Garima KC](https://github.com/Garimakc11 "Garima KC")
