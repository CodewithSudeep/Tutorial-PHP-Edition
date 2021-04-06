<?php


$intro = "Hey!,Are,you,enjoying,PHP?";

// create a function which generates an array of characters in given string
// create another function which reverses the array from 1.
// create another function which joins all characters in array of 2 and print it.
function array_to_string($arry)
{
    return(explode(",",$arry));
}
function rev_array($arry_rev)
{
    return(array_reverse($arry_rev));
}
function join_rev_arry($join_arry)
{
    return (implode(" ",$join_arry));
}
$arry_=array_to_string($intro);
echo "The generated array of characters is::";
print_r($arry_);
$arryRev=rev_array($arry_);
echo "<br>The reverse of array  is::";
print_r($arryRev);
$arry_join=join_rev_arry($arryRev);
echo "<br>The reverse of array  is::";
echo $arry_join;
?>

