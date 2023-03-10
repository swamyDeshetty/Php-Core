<?php

$conn=mysqli_connect('localhost','root','','crud');

if($conn){
    echo "connected succesfully";
}else{
    die(mysqli_error($conn));
}

?>