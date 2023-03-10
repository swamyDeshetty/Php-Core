<?php

error_reporting(0);

include("connection.php");

$selectquery = "SELECT  * FROM  bowlers";

$query = mysqli_connect($conn,$selectquery);

$total = mysqli_num_rows($query);

echo $total[3];
?>