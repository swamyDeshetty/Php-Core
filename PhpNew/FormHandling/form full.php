<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php form</title>
</head>
<body>


<?php
$name=$email='';

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
    $name=test_input($_POST['name']);
    $email=test_input($_POST['email']);
 }

 function test_input($data)
 {
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    $data=trim($data);
    return $data;
 }


?>

<form method='post' action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">


Name: <input type="text" name="name">
Email: <input type="text" name="email">
<input type="submit" name="submit" value="submit">



</form>
    <?php
    
    echo $name ."<br>";
    echo $email ."<br>";
    // echo $age."<br>";
    
    
    ?>
</body>
</html>