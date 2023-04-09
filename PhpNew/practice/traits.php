<!-- traits -->


<?php



trait message1{

    public function msg1(){
        echo "My name is Swamy";
    }
}

trait message2{

    public function msg2(){
        echo "My father name is the Gangaiah";
    }
}

class message1{
    use message1;
}

class message2{
     use message1,message2;
}


$obj=new message1();
$obj->msg1();

$obj1=new message2();
$obj1->msg1();
$obj->msg2();







?>