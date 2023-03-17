<?php

include "conn.php";

$id=$_GET['id'];

$sql="DELETE FROM `crud` WHERE id=$id";

$result=mysqli_query($conn, $sql);

if($result){
    header("Location: index.php?msg=Record Deleted succesfully");
}else{
    echo "Failed:" .mysqli_error($conn);
}


?>