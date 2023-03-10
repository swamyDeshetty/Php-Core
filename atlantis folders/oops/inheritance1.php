<?php

class cricketers{

    public $name="Ms Dhoni";
    public function cricket(){
        return "My fav cricketer is the ". $this->name;
    }
}
class  batting extends cricketers{

    public function cricket2($b){
        $this->name=$b;
    }


}
$obj=new batting;
$obj->cricket2("Jadeja");
echo $obj->cricket();





?>