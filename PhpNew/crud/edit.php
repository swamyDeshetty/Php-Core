<?php

include "conn.php";

$id= $_GET['id'];



if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];

    $sql="UPDATE `crud` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`gender`='$gender' WHERE id=$id";

    $result=mysqli_query($conn,$sql);

    if($result){
        header("Location:index.php?msg=Date updated succesfully");
    }
    else{
        echo "Failed:" . mysqli_error($conn);
    }
}



?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>PHP CRUD APPLICATION</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    h3{
        font-family:cursive;
        color:powderblue;
    }
    .email {
    margin: 2% 0 0 0%;
    }
    .form-control{
        margin: 2% 0 0 0%;
}
.input {
    margin: -1% 0 0 0%;
}
    
</style>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style='background-color: #00ff5573;'>
        PHP Complete CRUD Application
    </nav>
    
    <div class="container">
        <div class="text-center mb-4"> 
            <h3>Edit User Information</h3>
            <!-- <p class='text-muted'>Click update after changing any information</p> -->
        </div>

        <?php
        $sql= "SELECT * FROM `crud` WHERE id=$id LIMIT 1";
        $result=mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label for="form-label">First Name:</label>
                    <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name']?>">
                </div>
                <div class="col">
                    <label for="form-label">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name']?>">
                </div>
                <!-- &nbsp; -->
                <div class='email'>
                <div class="mb-3">
                    <label for="form-label">Email:</label>
                    <div class="input">
                    <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>">
                    </div>
                </div>
                </div>

                <div class="form-group mb-3">
                    <label>Gender:</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php echo ($row['gender']=='male')? "checked":""; ?>>
                    <label for="male" class="form-input-label">Male</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php echo ($row['gender']=='female')? "checked":""; ?>>
                    <label for="female" class="form-input-label">Female</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>

                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>

            </div>
        </form>
        </div>
</div>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>