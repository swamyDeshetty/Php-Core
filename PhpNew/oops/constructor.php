<?php

// __construct  is the default function that is called when the object is called.no need to call the constructor it is defaultly called when the object is called...


class Fruits{

    // public __construct()

    public $name;
    public $color;

    function __construct($name,$color){

        $this->name=$name;
        $this->color=$color;
    }

    function getname(){
        return $this->name;
    }
    function getcolor(){

        return $this->color;
    }


}

$obj=new Fruits('banana','yellow');

echo $obj->getname();
echo "<br>";
echo $obj->getcolor();



?>