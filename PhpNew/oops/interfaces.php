<?php

// interfaces dont have the properties interfaces have the abstract methods and interfaces have only public methods...
// we use the implements to inherit the interface class..

interface animal{

    public function sound();
}

class cat implements animal{
    public function sound(){
        echo "The animals are lives  in jungle.. ";
    }
}

$obj= new cat();

$obj->sound();

?>