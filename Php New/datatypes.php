<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatypes</title>
</head>
<body>

<h4>Data types in php</h4>

<?php

$y="swamy "."<br>";

echo $y;

$x=775;

echo $x ."<br>";
echo var_dump($x);

$a=true;
$b=false;

echo var_dump($a);

echo "<h4>Array datatypes </h4>";

// var dump is used to print the data of the array and it also gives the data of the array

$arr=Array('swamy','manusha','satwika','meggi','php',1); //array can store the multiple values in the single variable..

echo var_dump($arr)."<br>";

$arr1=array(1,2,3,4,5.44);

echo var_dump($arr1); 




?>
    
</body>
</html>