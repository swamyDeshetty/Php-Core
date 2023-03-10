<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "cricketers");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        error_reporting(E_ERROR | E_WARNING | E_PARSE );
        //taking the values from the form data....
        $emp_id =  $_REQUEST['emp_id'];
        $emp_first_name=$_REQUEST['emp_first_name'];
        $emp_last_name = $_REQUEST['emp_last_name'];
        $emp_email_address = $_REQUEST['emp_email_address'];
        $emp_password =  $_REQUEST['emp_password'];
        $emp_attendance =  $_REQUEST['emp_attendance'];
        $emp_address = $_REQUEST['emp_address'];
        $emp_salary = $_REQUEST['emp_salary'];
        $join_date = $_REQUEST['join_date'];
         
        // Performing insert query execution
        // here our table name is student
        $sql = "INSERT INTO batsmen  VALUES ('$emp_id',
            '$emp_first_name','$emp_last_name','$emp_email_address','$emp_password','$emp_attendance','$emp_address','$emp_salary','$join_date')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$first_name\n $last_name\n "
                . "$male\n$female\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
</body>
 
</html>