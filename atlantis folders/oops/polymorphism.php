 <?php
 
 interface fruit{//interface dont have the body we can call the same functions in the child classes of the interface
    public function sayHello();
 }
 class apple implements fruit{
    public function sayHello(){
        echo "This is the apple <br>";
    }
 }
 class orange implements fruit{
    public function sayHello(){
        return "Hey, iam orange <br>";
    }
 }
 class mango implements fruit{
    public function sayHello(){
        return "Good morning, iam mango <br>";
    }
 }
 $apple=new apple();
 $orange=new orange();
 $mango =new mango();
 $fruits=array($apple,$orange,$mango);
 foreach($fruits as $fruit){
    echo $fruit->sayHello();
 }
 
 
 ?>