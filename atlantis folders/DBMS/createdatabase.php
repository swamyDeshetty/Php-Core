<?php
   
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'cricketers');
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   echo 'Connected successfully';
   
   $sql = 'CREATE TABLE bowlers( '.
      'emp_id INT NOT NULL AUTO_INCREMENT, '.
      'emp_name VARCHAR(20) NOT NULL, '.
      'emp_address  VARCHAR(20) NOT NULL, '.
      'emp_salary   INT NOT NULL, '.
      'join_date    datetime NOT NULL, '.
      'primary key ( emp_id ))';

      //add two more columns to employee table. ALTER TABLE

   mysqli_select_db($conn, 'cricketers');


   $retval = mysqli_query( $conn, $sql );
  
   if(! $retval ) {
      //echo "if";
      die('Could not create table: '.mysqli_error( $conn));
   }
   
   echo "Table employee created successfully\n";
   
   mysqli_close($conn);
?>
