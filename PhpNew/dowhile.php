<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do and while loop</title>
</head>
<body>

    <!--while: it executes the block of code as long as condition is true -->
    <?php
    
    $x=1;

    while($x<10)
    {
        echo "The number is the :$x <br>";
        if ($x==6){
            // break;
        }
        $x++;
    }
    
    echo " <h4>Do While loop </h4>";

    $x=10;

    do{
        echo "The number is $x"."<br>";
        $x+=10;
    } while($x<=100);

    // Note: in do while loop the condition is tested after the execution statements ,the do while loop executes
    //  the statements at least once even if the condition is false...

    $x=5;

    do{
        echo "This is the false loop $x";
        $x++;
    }while($x<3)

    
    ?>
    
</body>
</html>