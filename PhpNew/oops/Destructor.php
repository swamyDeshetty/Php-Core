
<!-- Destructor is called at the end of the execution.. it is called when all the functions  completed its execution... -->

<?php

class keys{

    public $name;
    public $age;

    function __construct($name,$age){

        $this->name=$name ;
        $this->age=$age;
    }

    function get_name(){
        return $this->name .$this->age;
    }

    function __destruct(){

        echo "My name is {$this->name} <br> My age is {$this->age} <br>";
        
        echo "My self ".$this->name,"<br> my age is ".$this->age;
    
        }

    function details($height,$weight){

        $this->weight=$weight. $this->height=$height;
       
    }
}

$obj= new keys('swamy',22);

echo $obj->get_name();

echo "<br>";

$obj->details(167,50);

echo $obj->weight;

echo "<br>"

    




?>