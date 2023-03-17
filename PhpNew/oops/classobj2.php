<?php


class student{


public $man='oldman <br>';

    function setname($name,$color){

        $this->name=$name;
        $this->color=$color;
    }
    function getname(){

        return $this->name. $this->color;
                             
    }

    function setage($age){

        $this->age=$age;
    }

    function getage(){

        return $this->age;
    }
}

$obj=new student();

echo $obj->man;

$obj->setname('black','swamypatel <br>');
$obj->setage(21);

echo $obj->getname();
echo $obj->getage();


?>