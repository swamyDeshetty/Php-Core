<?php

$x=array("swamy","patel","Deshetty");

echo "<h4>".$x[0]."<br>"."</h4>";
echo var_dump($x);

// arrays with the loops..

$arrlen=count($x);

for($i=0;$i<$arrlen;$i++)
{
    echo $x[$i]."<br>";
}

#first
$x=array('swamy','shiva','naresh','naveen');

echo var_dump($x);
echo  $x[0];

#second using the forloop..

$cars=array('bmw','shift','rollsroyce','benz');

$arrlen=count($cars);

for($x=0;$x<$arrlen;$x++)
{
    echo $cars[$x] ."<br>";
}

echo "<h5>Associative arrays</h5>";

$age =array("name"=>"swamy","age"=>21,"sal"=>24000);

foreach($age as $x =>$x_val)
{
    echo $x ."=".$x_val ."<br>";
}


echo "<h3>Multidimensional arrays </h3>";

$x=array(
    array('swamy','22',"25000"),
    array('Naresh','22',"35000"),
    array('shiva','22',"15000")

);

echo  "my name is ".$x[0][0], "My age is ".$x[0][1],"my sal is ",$x[0][2] ."<br>";
echo  "my name is ".$x[1][0],"My age is ".$x[1][1],"my sal is ",$x[1][2];


$x=array(
    array("name",22,25000),
    array('')
);

echo "my name is the " .$x[0][0],"my age is the ".$x[0][1] ."<br>";






?>