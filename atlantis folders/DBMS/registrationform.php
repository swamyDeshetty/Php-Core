<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>registration form</title>
</head>
<body>
    <div>
        <?php
        if(isset($_POST['create'])){
            $firstname     =$_POST['firstname'];
            $lastname      =$_POST['lastname'];
            $email         =$_POST['email'];
            $phonenumber   =$_POST['phonenumber'];
            $password      =$_POST['password'];

            $sql="INSERT INTO swamy (firstname, lastname, email, phonenumber, password) VALUES(?,?,?,?,?)";
            $stmtinsert= $db->prepare($sql);
            $result= $stmtinsert->execute($firstname,$lastname,$email,$phonenumber,$password);
            if($result){
                echo "saved successfully";
            }else{
                echo "dont saved";
            }
        }
        ?>

        <form action="registrationform.php" method="post">
            <div class="container">
                <h1>registration</h1>
                <p>fill the correct values</p>
                <label for="firstname"><b>firstname</b></label><br>
                <input type="text" name="firstname"><br>

                <label for="lastname"><b>Lastname</b></label><br>
                <input type="text" name="lastname"><br>

                <label for="email"><b>email</b></label><br>
                <input type="text" name="email"><br>

                
                <label for="phonenumber"><b>phonenumber</b></label><br>
                <input type="text" name="phonenumber"><br>

                <label for="password"><b>password</b></label><br>
                <input type="password" name="password"><br>

                <input type="submit" name="create",value="submit"><br>
</div>
</form>
</div>
</body>
</html>
