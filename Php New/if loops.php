<?php

$x=20;

if ($x==10)
{
    echo "swamy";
}
elseif($x==20)
{
    echo "manusha <br>";
}
else{
    echo "patel";
}


$x=40;
$y='40';
echo var_dump(is_int($x))."<br>";
echo var_dump($y)."<br>";


if($x===$y)
{
    echo "Both are identical both the data types and values are equal";
}
elseif($x==$y)
{
    echo "Both the values are equal to each other";
}
else{
    echo "BOth are not equal";
}

echo "<h1> switch statements</h1>";

$fav_player="MSD";

switch($fav_player)
{
    case "Virat kohli":
        echo "VK is my fav player";
        break;
    case "Rohit":
        echo "Rohit is my fav player";
        break;
        
    case "Raina":
        echo "raina is my fav player";
        break;
    case "MSD":
        echo "Msd is my fav player in the world cricket";
        break;
    
    default:
        echo "sachin is my fav player";

}



?>