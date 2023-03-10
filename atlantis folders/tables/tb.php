<html>
<title>records in the table in format</title>
<body>
    <table border="2">
        <tr>
            <th>emp_id</th>
            <th>emp_name</th>
            <th>emp_address</th>
            <th>emp_salary</th>
            <th>join_date</th>
<?php
include('connection.php');
error_reporting(0);
$query="select * from bowlers";

$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);
if($total!=0)
{
    
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['emp_id']."</td>
        <td>".$result['emp_name']."</td>
        <td>".$result['emp_address']."</td>
        <td>".$result['emp_salary']."</td>
        <td>".$result['join_date']."</td>
        </tr>
        ";
    }
}
else
{
    echo "No records found";

}
?>
</table>
</body>
</html>