<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>

<?php

function name($name,$age)
{
    echo "My Name is"." ".$name."my age is"." ".$age."<br>";
}

name('SwamyPatel',22);
name('Manusha Patel',21);
name('Shiva',26);
name('Pranitha',25);



function add(int $a,int $b)
{
    return $a+ $b;
}
echo add(2,"5")."<br>";


echo "default values"."<br>";

function myname($x=20,$y=30)
{
    echo $x +$y."<br>";
}

myname(1,2);
myname(15,10);

function age($x,$y)
{
    echo $x+$y."<br>";
}

age($x=12,$y=21);
age($x=15,$y=21);


function calci($x=10,$y=22)
{
    return $x+$y;
}

echo calci();

?>
</body>
</html>