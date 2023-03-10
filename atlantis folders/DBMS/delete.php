<?php
$conn = mysqli_connect("localhost", "root", "", "crud");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        if(isset($_GET['deleteemp_id'])){
            $emp_id=$_GET['deleteemp_id']
            
            $sql="DELETE FROM 'labour' WHERE emp_id=$emp_id";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo "Deleted succesfully";
            }else{
                . mysqli_connect_error($conn);
            }
        }
