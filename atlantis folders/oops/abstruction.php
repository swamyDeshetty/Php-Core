<?php

abstract class swamy{
    public $car="Audi";
    abstract public function carname();
     
}
class manu extends swamy{
    public function bikename($b){
     $this->car=$b;
    }
    function carname(){
        return "The brand of the car is the".$this->car;
    }
}
$obj=new manu;
$obj->bikename("Mercades");
echo $obj->carname();

?>