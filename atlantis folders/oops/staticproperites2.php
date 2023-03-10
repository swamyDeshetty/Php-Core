<?php

class company{

    function __construct(){
        echo "swamy is a python developer and php developer..<br>";
    }
    static function name(){
        echo "Manu is the topper in my college <br>";
    }
}
$obj=new company();//whenever we dont want to call the construct function we use this static mthod or function
company::name();//by using the static method we no need to take the obj here then the construct method is dont called



?>