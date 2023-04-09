<!-- interface dont have the properties -->
<!-- interface method must be public  -->
<!-- All the methods in the interface are abstract methods  -->

<?php

interface animal{
    public function name();
    public function color();
}

class bird implements animal{
    public function name()
    {
        echo "My favourite bird is the peacock <br>";
    }
    public function color(){
        echo "My fav color is the powderblue";
    }
}

$obj=new bird();
$obj->name();
$obj->color();



?>