<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   
   $sql = 'SELECT emp_id, emp_name, emp_salary,emp_address,join_date FROM bowlers ';  // select column_names from tablename;
  // $sql = 'SELECT * FROM employee';  // select column_names from tablename;
   mysqli_select_db($conn,'cricketers');
   $records = mysqli_query($conn, $sql );
  /* echo "<pre>"; print_r($records);*/
   if(! $records ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
   
   /*while($row = mysqli_fetch_array($records, MYSQLI_ASSOC)) {
      echo "EMP ID :{$row['emp_id']}  <br> ".
         "EMP NAME : {$row['emp_name']} <br> ".
         "EMP SALARY : {$row['emp_salary']} <br> ".
         "EMP ADDRESS : {$row['emp_address']} <br> ".
         "--------------------------------<br>";
   }*/

 /*  while($row = mysqli_fetch_assoc($records)) {
      echo "EMP ID :{$row['emp_id']}  <br> ".
         "EMP NAME : {$row['emp_name']} <br> ".
         "EMP SALARY : {$row['emp_salary']} <br> ".
         "--------------------------------<br>";
   }*/

      while($row = mysqli_fetch_array($records, MYSQLI_NUM)) {
      echo "EMP ID :{$row[0]}  <br> ".
         "EMP NAME : {$row[1]} <br> ".
         "EMP SALARY : {$row[2]} <br> ".
         "EMP ADDRESS : {$row[3]} <br> ".
         "EMP JOIN DATE : {$row[4]} <br> ".
         "--------------------------------<br>";
   }

   

   
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);
?>
