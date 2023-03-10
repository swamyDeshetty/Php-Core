<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operators</title>
</head>
<body>
    <?php
    
    $x=20;
    $y=40;

    echo $x+$y."<br>";
    echo $x-$y."<br>";
    echo $x * $y."<br>";
    echo $x/$y."<br>";
    echo $x% $y."<br>";
    echo $x ;

    echo 'Assigment operators'."<br>";;
    echo $x==$y;

    echo 'comparison operators'."<br>";
    $x='10';
    $y=10;

    echo var_dump($x==$y)."<br>";
    echo var_dump($x===$y)."<br>";
    echo var_dump($x>$y)."<br>";
    echo var_dump($x>=$y)."<br>";

    echo "Increment operators"."<br>";

    $x=10;
    
    echo ++$x."<br>"; // preincrement 

    $x=20;
    echo $x++."<br>"; // postincrement
    echo $x ."<br>";



    $x=10;
    
    echo --$x."<br>"; // preincrement 

    $x=20;
    echo $x--."<br>"; // postincrement
    echo $x;

    
    
    
    ?>
</body>
</html>