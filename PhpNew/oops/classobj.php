<?php


class Name{

    public $name;
    public $age;

    function setnames($name){
        $this->name=$name;
    }
  
}

$obj=new Name();

$obj->setnames('swamy');

echo $obj->name;





?>