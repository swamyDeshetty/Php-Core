<?php

$username = "root";
$password = "";
$server = "localhost";
$db ="cricketers";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
    echo "connected succesfully";
}else{
    die("no connection".mysqli_connect_error());
}
 