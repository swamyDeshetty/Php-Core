<!DOCTYPE html>
<html>
   <head>
      <title>GFG- Store Data</title>
   </head>
   <body>
         <h1>Storing Form data in Database</h1>
         <form action="store.php" method="post">
             
<p>
               <label for="emp_id">EMP ID:</label>
               <input type="text" name="emp_id" id="emp_id">
            </p>
            <p>
               <label for="Name">Name:</label>
               <input type="text" name="emp_name" id="emp_Name">
            </p>

            <p> 
               <label for="Address">Address:</label>
               <input type="text" name="emp_address" id="Address">
            </p>
 
             
<p>
               <label for="salary">Empsalary:</label>
               <input type="text" name="emp_salary" id="salary">
            </p>
            <p>
                
               <label for="joiningdate">JOINDATE:</label>
               <input type="date" name="join_date" id="dateofjoining">
</p>

 
            <input type="submit" value="Submit">
            <input type="reset" value="refresh">
         </form>
   </body>
</html>