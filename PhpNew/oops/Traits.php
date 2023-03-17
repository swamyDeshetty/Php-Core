<?php

trait message1{

    function msg1(){
        echo "This is swamy patel";
    }
}

class welcome{
    use message1;
}

$obj= new welcome();

$obj->msg1()



?>