<?php

$servername='localhost';
$username='root';
$password='';
$db='php-auth';

$conn=mysqli_connect($servername,$username,$password,$db);

if(!$conn){

    die('connection failed'.mysqli_connect_error());
}

// echo 'connected succesfully';               









?>