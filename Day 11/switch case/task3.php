<?php

// create two int vars

$num1 = 10;
$num2 = 20;

// create an array of arithmetic operators (+,-,*,/,%,**)

$operators = array("+","-","*","/","%","**");   //array

//count the total items in $operators using count() function

$number_of_operators = count($operators);

// generate random number in range of 0 to $number_of_operators-1 using rand function

$random = rand(0,$number_of_operators-1);

// access a single item from array of operators for type of operation

$operator = $operators[$random];    //access array like indexed array where index is $random variable

// use switch case for arithmetic operations given by $operator
switch ($operator){
    case "+":
        echo "the sum is:" .$num1+$num2;
        break;

    case '-':
        echo "the difference is:" .$num1-$num2;
        break;

    case '*':
        echo "the product is:" .$num1*$num2;
        break;

    case '/':
        echo "the result is:" .$num1/$num2;
        break;
       
        case '%':
            echo "the result is:" .$num1%$num2;
            break;

            case '**':
                echo "the result is:" .pow($num1,$num2);
                break;
}

?>



