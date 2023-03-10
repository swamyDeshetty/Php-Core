<?php

$x=67;

echo  var_dump(is_int($x))."<br>";  //function to check the integer or not..

$y=5.77;

echo var_dump(is_float($y))."<br>";

//program to check the integer or not..

$x=44;
echo var_dump(is_integer($x)),"<br>";


$x=55;

echo var_dump(is_numeric($x))."<br>";


echo "Math functions.."."<br>";

echo (pi())."<br>";

echo (abs(-3.5))."<br>";

echo(max(1,2,3,4,5))."<br>";
echo(min(12,43,56,23,0))."<br>";

echo (round(0.5))."<br>"; 
echo(round(0.3))."<br>";

echo (ceil(2.9))."<br>";

echo(SQrt(100))."<br>";  
?>