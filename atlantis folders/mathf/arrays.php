<html>
    <h1> ASSOCIATIVE ARRAYS</h1>
    <body>
        <?php
        $age=array("swamy"=>"21","manu"=>"21","naveen"=>"20");
        foreach($age as $x=>$x_value){
            echo "my name is"." ".$x." "."my age is".$x_value;
            echo "<br>";
        }
        
        ?>
        <?php
        $age=array("swamy"=>"22","manu"=>"23","naveen"=>"20");
        echo "swamy age is".$age["swamy"]."<br>";
        echo "manu age is ".$age["manu"];
        ?>
        </body>

</html>
