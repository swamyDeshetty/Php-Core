<?php

include_once('connection.php');
$sql="select  * from  bowlers";
$rs_result=mysqli_query($sql);

?>


<!DOCTYPE html>
<html>
    <head>
        <title>pagination in php </title>
</head>
<body>
    <table align="center" border="1px">
        <tr>
            <th>Employee ID </th>
            <th>Employee name </th>
            <th>Employee address </th>
            <th>Employee salary</th>
            <th>Employee joindate</th>
</tr>
</table>
</body>
</html>