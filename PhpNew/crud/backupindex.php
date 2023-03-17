

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
    .pagination {
  display: flex;
  justify-content: center;
  margin: 20px 0;
}

.pagination a {
  color: #007bff;
  text-decoration: none;
  border-radius: 3px;
  padding: 5px 10px;
  margin: 0 5px;
  background-color: #f7f7f7;
}

.pagination a:hover {
  background-color: #eaeaea;
}

.pagination .active {
  background-color: #007bff;
  color: #fff;
}

</style>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style='background-color: #00ff5573;'>
        PHP Complete CRUD Application
    </nav>
    
    <div class="container">
        <?php
        if(isset($_GET['msg'])){
            $msg= $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
           '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
        <table class="table table-hover text-center">
  <thead class="table-success">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
<?php

include 'conn.php';

// $sql="SELECT * FROM `crud`";

// $result=mysqli_query($conn,$sql);

//pagination..
$num_per_page=05;

if(isset($_GET['page']))
{
    $page=$_GET['page'];
}
else{
    $page=1;
}

$start_from=($page-1)*03;
$sql="SELECT * FROM `crud` LIMIT $start_from,$num_per_page";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{


    ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['first_name']?></td>
      <td><?php echo $row['last_name']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['gender']?></td>

<td>
    <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-primary"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
    <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark "><i class="fa-solid fa-trash fs-5"></i></a>
    

</td>
    </tr>

    <?php
}
?>

  </tbody>
</table>
<a href="addnew.php" class="btn btn-success mb-3">Add New</a>

    </div>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<?php

$sql="SELECT * FROM `crud`";

$result=mysqli_query($conn,$sql);

$total_records=mysqli_num_rows($result);

$pages=ceil($total_records/$num_per_page);

for($i=1;$i<=$pages;$i++)
{
    $active = ($i == $page) ? "active" : "";
    echo "<a href='index.php?page=".$i."' class='".$active."'>".$i."</a>";
}





?>
<div class="pagination">
  <a href="index.php?page=1">1</a>
  <a href="index.php?page=2">2</a>
  <a href="index.php?page=3">3</a>
  <!-- and so on... -->
</div>

</body>
</html>