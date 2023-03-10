<?php

echo date('y/m/d') ."<br>";
echo date('y-m-d') ."<br>";
echo date('2') ."<br>"; 
echo date('y') ."<br>";
echo date("h:i:sa") ."<br>";

echo "The date and time is".date('y/m/d h:i:sa') ."<br>";


$d=strtotime("10:23 PM April 14 2023");
echo date('y/m/d h:i:sa',$d) ."<br>";


$x=strtotime('yesterday');
echo date('y/m/d h:i:sa',$x);
include 'demo1.php';
?>