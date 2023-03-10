<html>
    <body>
        <h3>Logical operators</h3>
        <?php
        $s=15;
        $p=20;
        if($s==15 and $p==20){//and operator: both the conditions need to be true
            echo "AND OPERATOR"."<br>";
        }
        $x=5;
        $y=10;
        if($x>5 or $y<=10){//ONLY ONE CONDITION NEED TO BE TRUE
            echo "OR OPERATOR"."<br>";
        }
        $x=30;
        $y=40;
        if($x>=30 | $y<=10){//ONLY ONE CONDITION NEED TO BE TRUE
            echo "OR OPERATOR"."<br>";
        }
        $p=21;
        $q=11;
        if($p==21 && $q==11){//and operator: both the conditions need to be true
            echo "AND OPERATOR"."<br>";
        }
        $m=15;
        $s=25;
        if($m==10 xor $s==25){
            echo "xor operator"."<br>";//either m or s is true but not the both.
        }
        $x=100;
        if($x!=90){
            print("not operator");//$x is not true..
        }
        ?>
        </body>
    </html>