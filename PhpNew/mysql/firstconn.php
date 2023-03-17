<?php

$servername='localhost';
$username='root';
$password='';

$conn=new mysqli($servername,$username,$password);

if($conn->connect_error){
    echo "Connection failed ".$conn->connect_error;
}
echo"connected succesfully";

$sql="CREATE DATABASE mydb";

if($conn->query($sql)==TRUE)
{
    echo "Database created succesfully";
}else{
    echo "Error creating the database".$conn->error;
}





?>