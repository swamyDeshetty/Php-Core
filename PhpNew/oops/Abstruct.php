<?php

abstract class car{

    public $name;
    public $model;

    public function __construct($name,$model){

        $this->name=$name ;
        $this->model=$model;
    }
    abstract public function  intro() : string;
    // abstract function are have only the declaration but not the defination..
}

class bike extends car{

    public function intro():string{

        return "Hello swamy the bike model is $this->model and the bike name is $this->name";
    }
}

$obj=new bike('Royal E  nfield','bullet');

echo $obj->intro();






?>