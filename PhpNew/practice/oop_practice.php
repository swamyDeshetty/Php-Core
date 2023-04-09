<?php

class Name{

    public $name;
    public $age;

    function set_name($name)
    {
        $this->name=$name;
    }
    function get_name()
    {
        return $this->name;
    }
    function age($age){

        return $this->age=$age;
    }
}

$obj=new Name();

$obj->set_name('manusha');

echo $obj->get_name();
echo "<br>";

echo $obj->age('Swamy');
echo "<br>";


echo $name="manu``";
echo "<br>";
