 j4<html>
   
   <head>
      <title>Paging Using PHP</title>
   </head>
   
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         
         $PHP_SELF = $_SERVER['PHP_SELF'];
        // echo $PHP_SELF;

         $rec_limit = 2;
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         mysqli_select_db($conn, 'trainee');
         
         /* Get total number of records */
         $sql = "SELECT count(emp_id) FROM employee ";
         $records = mysqli_query($conn, $sql );
         
         if(! $records ) {
            die('Could not get data: ' . mysqli_error($conn));
         }
         $row = mysqli_fetch_array($records, MYSQLI_NUM );
         $rec_count = $row[0];
         //echo $rec_count;
         
         if( isset($_GET{'page'} ) ) {
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }
         
         $left_rec = $rec_count - ($page * $rec_limit);
         $sql = "SELECT emp_id, emp_name, emp_salary ". 
            "FROM employee ".
            "LIMIT $offset, $rec_limit";

         //echo $sql; echo "<br>";
            
         $retval = mysqli_query($conn, $sql );
         
         if(! $retval ) {
            die('Could not get data: ' . mysqli_error($conn));
         }
         
         while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
            echo "EMP ID :{$row['emp_id']}  <br> ".
               "EMP NAME : {$row['emp_name']} <br> ".
               "EMP SALARY : {$row['emp_salary']} <br> ".
               "--------------------------------<br>";
         }
         
         if( $page > 0 ) {
            $last = $page - 2;
            echo "<a href = \"$PHP_SELF?page=$last\">Last 2 Records</a> |";
            echo "<a href = \"$PHP_SELF?page=$page\">Next 2 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = \"$PHP_SELF?page=$page\">Next 2 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = \"$PHP_SELF?page=$last\">Last 2 Records</a>";
         }
         
         mysqli_close($conn);
      ?>
      
   </body>
</html>
