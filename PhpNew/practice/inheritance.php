<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php  Elements</title>
</head>
<body>

<?php


class animal{

    public function __construct($name){
        $this->name=$name;
    }

    function animalname()
    {
        echo "My name is {$this->name}";
    }
}

class fruit extends animal{
    
    public function msg(){
        echo "This is swamy Deshetty";
    }

}

$obj=new fruit('swamy');

$obj->animalname()."<br>";

$obj->msg();


//we can overide the properties and methods by using the samemethods and properties in the child class....

class fire{

    public $name;
    public $color;

    function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }

    function fetch()
    {
        echo "The fruit name is {$this->name} and the color is {$this->color}";
    }


}
// we can overide the properties and methods by using the samemethods in the child class..

class vegatable extends fire{

    public $weight;

    public function __construct($name,$color,$weight)
    {
        $this->name=$name;
        $this->color=$color;
        $this->weight=$weight;
    }
    public function fetch()
    {
        echo "The fruit name is the {$this->name} and the fruit color is {$this->color} and fruit weight is {$this->weight}";
    }
}


$obj=new vegatable('apple','red',"29 grams");
$obj->fetch();




// using the constant in the oops

class hello{

    const name="My name is swamy and my age is 22";

    function myname()
    {
        echo self::name;
    }
}

$obj=new hello();
$obj->myname();


?>

    
</body>
</html>