<?php

class myfav{

    public $x=300;
    function swamy(){
        $this->x=20;// if we want to use  the global variable inside the function we use this method($this->variable)
        echo "php and laravel developer <br>";
    }
    function manu(){
        $this->x=65;// it prints the last taken variable only like it doesnot prints the 20 or 65...
        echo "only python developer...<br>";
    }
}
$obj=new myfav();
$obj->swamy();
$obj->manu();
echo $obj->x;   




?>