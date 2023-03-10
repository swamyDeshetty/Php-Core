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
        $conn = mysqli_connect("localhost", "root", "", "crud");
         
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
         
        // Performing insert query execution
        // here our table name is student
        $sql = "INSERT INTO labour  VALUES ('$emp_id',
            '$emp_first_name','$emp_last_name','$emp_email_address','$emp_password')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$first_name\n $last_name\n "
                . "$male\n$female\n $address\n $email");
                //header('location:displaytb.php');
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
 </body>
 
</html>