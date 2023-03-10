<?php
//$name_error='';
if(isset($_POST["Submit"]))
{
   $name_error=$_POST["emp_first_name"];
   if(preg_match("/^[a-zA-Z ]*$/",$name_error))
   {
      echo "<p>Plz Enter the Name</p>";
   }
   else{
     echo "enter the correct details";
   }
}

  
?> 
<!DOCTYPE html>
<html>
   <head>
      <title>GFG- Store Data</title>
   </head>
   <body>
         <h1>Storing Form data in Database</h1>
         <form action="storingdatainsql.php" method="post">
             
<p>
               <label for="emp_id">EMP ID:</label>
               <input type="text" name="emp_id" id="emp_id">
            </p>
 
             
<p>
               <label for="fist_Name">First Name:</label>
               <input type="text" name="emp_first_name" id="firstName">
               <span class="text-danger"><?php echo $name_error ;?></span>
            </p>
                         
<p>
               <label for="last_Name">Last Name:</label>
               <input type="text" name="emp_last_name" id="lastName">
            </p>
            <p>
               <label for="emailAddress">Email Address:</label>
               <input type="text" name="emp_email_address" id="emailAddress" >
            </p>

            <p>


            <label for="password">Emp_password:</label>
            <input type="password" name="emp_password" id="psw">
</p>

 
            <input type="submit" name="Submit" value="Submit">
            <input type="reset" value="refresh">
         </form>
   </body>
</html>