<?php

interface swamy{
    function bat();
}
class cricket implements swamy{
    function bat(){
        echo "MS dhoni is the one of the best batsmen in the world <br>";
    }
}
class Rohit implements swamy{
    function bat(){
        echo "Rohit sharma is the best scorer in the world cricket <br>";
    }
}
class kohli implements swamy{
    function bat(){
        echo "Kohli is the king of the cricket.. <br>";
    }
}

$obj=new cricket();
$obj1=new Rohit();
$obj2=new kohli();

$cricketers=array($obj,$obj1,$obj2);
foreach($cricketers as $cricket){
    $cricket->bat(); 
}



?>