<?php

$x=array("swamy","manu","naresh","pranitha");

#sorting the array.
rsort($x);

$arrlen=count($x);

for($y=0;$y<$arrlen;$y++)
{
    echo $x[$y]."<br>";
}

// sorting the associative arrays...

$x=array("swamy"=>22,"manusha"=>21,"pranitha"=>25,"Akhila"=>23);

asort($x);

foreach($x as $y=>$y_value)
{
    echo $y ."=".$y_value;
    echo "<br>";
}

$cars=array('Bmw'=>"25","Swift"=>"7","Benz"=>"10");

asort($cars);

foreach($cars as $x => $x_val )
{
    echo $x."=".$x_val ."<br>";
}
$cars=array('Bmw'=>"25","Swift"=>"7","Benz"=>"10");

echo "<br>";

arsort($cars);

foreach($cars as $x => $x_val )
{
    echo $x."=".$x_val ."<br>";
}

echo "<br>";

$cars=array('Bmw'=>"25","Swift"=>"7","Benz"=>"10");

ksort($cars);

foreach($cars as $x => $x_val )
{
    echo $x."=".$x_val ."<br>";
}

echo "<br>";


$cars=array('Bmw'=>"25","Swift"=>"7","Benz"=>"10");


krsort($cars);

foreach($cars as $x => $x_val )
{
    echo $x."=".$x_val ."<br>";
}



?>