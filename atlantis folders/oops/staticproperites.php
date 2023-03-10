<?php

class student{
    static public $name="swamy ";//static variable 
    public function proposal(){
        echo self::$name. "loves cricket";
    }
    static public function sayHello(){
        echo  self::$name."<br>";
    }
}
echo student::$name."<br>";//no need to create the object for the calling of the properites or variables 
$obj=new student(); 
$obj->proposal();//To cALL THE METHODS WE USE THE OBJECT HERE LIKE THIS
echo $obj->sayHello();
student::sayHello();


?>