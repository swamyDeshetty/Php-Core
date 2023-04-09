<?php


// construct is used to execute when the object is created no need to call this function..
// Destruct is called when the object is destructed or the script is stops it execution
// if you create a __destruct function the php automatically executes end of the script

class Employee{

    public $name;
    public $age;

    function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }

    function __destruct()
    {
        echo "My name is $this->name and my age is $this->age ";
    }
}

$obj=new Employee('swamy',22);

echo $obj->name="manusha ";




?>