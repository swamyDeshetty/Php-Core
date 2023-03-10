<?php
class name{
    public $x=0;
    static $y=0;
    public function number(){
        $this->x++;
        self::$y++;
    }

}
$obj=new name();
echo $obj->x."<br>";
echo name::$y."<br>";
$obj->number()."<br>";
echo $obj->x."<br>";
echo name::$y."<br>";
$obj->number()."<br>"; 
echo $obj->x."<br>";
echo name::$y."<br>"; 
echo "----------------------<br><br>";

$obj1=new name();//static variable is not changing the but the non static variable is changing..this is the concept here
echo $obj1->x."<br>";
echo name::$y."<br>";
$obj1->number()."<br>"; 
echo $obj1->x."<br>";
echo name::$y."<br>";
?>