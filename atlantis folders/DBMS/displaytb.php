<?php
$conn = mysqli_connect("localhost", "root", "", "crud");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Display table</title>
</head>
<body>
    <div class="container">
        <button><a href="forminsql.php">add user</button>
        <table align="center" border="1px">
            <tr>
                <th>emp_id </th>
                <th>emp_first_name </th>
                <th>emp_last_name </th>
                <th>emp_email_address</th>
                <th>emp_password </th>
                <th>operations </th>
</tr>
</body>
<?php
$sql = "SELECT * FROM labour ";
$result = mysqli_query($conn, $sql );
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $emp_id=$row['emp_id'];
        $emp_first_name=$row['emp_first_name'];
        $emp_last_name=$row['emp_last_name'];
        $emp_email_address=$row['emp_email_address'];
        $emp_password=$row['emp_password'];
         echo '<tr>
        <th>'.$emp_id.'</th>
        <th>'.$emp_first_name.' </th>
        <th>'.$emp_last_name.' </th>
        <th>'.$emp_email_address.'</th>
        <th>'.$emp_password.'</th>
        <th>
        <button ><a href="update.php">Update</a></button>
        <button><a href="delete.php?deleteemp_id='.$emp_id.'">delete</a></button>
        </th>

</tr>';
    }
}
?>

<th
</html>