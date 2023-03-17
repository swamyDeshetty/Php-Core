<?php


// constructor is a function it is called when the object is created and no need to call the function it is used to called by creating the object only..

class cars{

    public $name;
    public $model;

    function __construct($name,$model){

        $this->name=$name . $this->model=$model;
    }

    function get_name()
    {

        return $this->name;
        return $this->model;
    }

}

$obj=new cars('Shine','bs6');

echo $obj->get_name();



?>