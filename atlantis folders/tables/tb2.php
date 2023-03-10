<?php

include_once('connection2.php');
$sql=" select * from bowlers";
$rs_result=mysqli_query($sql);

$num_per_page=10;

if(isset($_GET['page']))
{
    $page=$_GET['page'];
}
else{
    $page=0;
}

$start_from=($page-1)*10;

$sql="select *from bowlers limit $start_from,$num_per_page";
$rs_result=mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html>
    <title>pagination in php </title>
    <body>
        <table align="center" border="1px">
            <tr>
                <th>emp_id </th>
                <th>emp_name </th>
                <th>emp_address </th>
                <th>emp_salary </th>
                <th>join_date </th>
</tr>

<?php
while($rows=mysqli_fetch_assoc($rs_result))
{

?>
<tr>
    <td><?php echo $rows['emp_id'];?></td>
    <td><?php echo $rows['emp_name'];?></td>
    <td><?php echo $rows['emp_address'];?></td>
    <td><?php echo $rows['emp_salary'];?></td>
    <td><?php echo $rows['join_date'];?></td>
</tr>
<?php
}
?>

</table>
<?php

$sql="select * from bowlers";
$rs_result=mysqli_query($sql);
$total_records=mysqli_num_rows($rs_result);
$total_pages=ceil($total_records/$num_per_page=5);


for($i=1;$i<=$total_pages;$i++)
{
    echo "<a href='tb2.php?page=".$i."'>".$i."</a> ";

}

?>
</body>
</html>