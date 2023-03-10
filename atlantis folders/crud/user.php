<?php
include 'connection4.php';
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


    $sql="INSERT INTO  employee12  VALUES ('$id',$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data inserted succesfully";
    }else{
        die(mysqli_error($conn));
    }
}



?>









<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
     <title>crud operation</title>
  </head>
  <body>
    <div class='container'>
    <form method="post">
        
  <div class="form-group">
    <label >id</label>
    <input type="text" class="form-control" placeholder="Enter your id" name="id">
</div>
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name">
</div>
<div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email">
</div>
<div class="form-group">
    <label >Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile">
</div>
<div class="form-group">
    <label >password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
    <h1>Hello, world!</h1>

  </body>
</html>