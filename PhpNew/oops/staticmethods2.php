<?php

// No need to create the instance for the calling the static function in classes..
//using the self keyword we can call the function..

class stat{

    public static function skinn(){
        echo "my skin tone color is the White";
    }
    function __construct(){
        self::skinn();
    }
}

new stat();

class A{

    public static function marks(){
        echo "Ramu got 90 marks in the maths";
    }
}
class B extends A{
    function marks1(){
        A::marks();
    }
}

$obj=new B();
$obj->marks1();










?>