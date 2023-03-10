<html>
<h3>array column</h3>
<?php
$a=array(array("id"=>5696,"name"=>"swamy","lastname"=>"patel",),
array("id"=>4767,"name"=>"manu","lastname"=>"sha",),
array("id"=>5674,"name"=>"shiva","lastname"=>"prasad",));
$lastnames=array_column($a,"lastname","id");
echo "<pre>";
print_r($lastnames)
?>
<h4>array combine </h4>
<?php
$a=array("cricket","volleyball","kabaddi","tennis");
$b=array("11","11","6","2");
$c=array_combine($a,$b);
$d=array_combine($b,$a);
echo "<pre>";
print_r($c);
print_r($d);
?>
<h3>array key exist</h3>
<?php
$age=array("swamy"=>"21","manu"=>"21","avani"=>"21","gouthami"=>"21","chinnaiah"=>"21");
if(array_key_exists("swamy",$age)){//it checks the key is there or not 
    echo "key exists";
}else{
    echo "key is not exists";
}
?>
<h3>array_combine</h3>
<?php
$key=array("mango"=>"1","apple"=>"2","banana"=>"3");//it prints keys of the array
echo "<pre>";
print_r(array_keys($key));
//using the strict parameter..
$a=array(20,30,40,"20");
echo "<pre>";
print_r(array_keys($a,"20","true"));
?>
<h4>array </h4>
<?php
function square($n)
{
    return($n*$n);
}
$a=array(1,2,3,4,5,6);
echo "<pre>";
print_r(array_map("square",$a));

function check($a)
{
if ($a==="4")
{
    return "swamy";
}
return $a;
}
$res=[1,2,3,4,5,6];
echo "<prev>";
print_r(array_kmap("check",$res));

?>


</html>