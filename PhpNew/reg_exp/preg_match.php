<html>
    <body>


<?php


$lang="python is simple and easy to learn and python is more functionality with small code python is open source";
$pattern='/python/';

echo "The No of matches is ". preg_match_all($pattern,$lang)."<br>";
echo preg_match($pattern,$lang);

// preg_Replace..
// it is used to replace the string ..

$website="visit GFG to learn python is easily";
$pattern='/python/';

echo preg_replace($pattern,'php',$website)."<br >";


// preg_match

$page="hello this is swamy and my nickname is also swamy you can call me as swamy";
$pattern="/swamy/";
echo preg_match($pattern,$page)."<br >";

// preg_match_all..

$crick="Msd is the one of the best captain in the world and msd is the one of the bestkeeper in the world";
$pattern="/msd/i";
echo preg_match_all($pattern,$crick)."<br>";

// preg_replace..

$news="KTR is the it minister of TG and ktR is the best minister for developing the TG";
$pattern="/ktr/i";
echo preg_replace($pattern,'kcr',$news);

echo "<h4>The file handling </h4>";

$file=fopen('swamy.txt','r') or die('unable to open file');
echo fgets($file);
fclose($file);


// write function..
$file=fopen('swamy.txt','w');
$text="swamy is the python and php developer <br>";
fwrite($file,$text);
fclose($file);

// append the function..

$file=fopen('swamy.txt','a');
$txt='man is the power of the world <br>';
fwrite($file,$txt);
fclose($file);

// cookies 

$cookie_name="user";
$cookie_value="Swamy patel";

setcookie($cookie_name,$cookie_value,time()+(10));

if(!isset($_COOKIE[$cookie_name]))
{
    echo "the cookie $cookie_name is not set";
}
else{
    echo "the cokkie $cookie_name is set <br>";
    echo "the value of the cokkie is ".$_COOKIE[$cookie_name];
}

// json data

$x=array('swamy'=>22,"shiva"=>26); 
$y=json_encode($x);  //it converts from associative array to the json object..
echo $y;


function divide($dividend, $divisor) {
    if($divisor == 0) {
      throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
  }
  
  try {
    echo divide(5, 0);
  } catch(Exception $e) {
    echo "Unable to divide.";
  }









?>
        
        </body>
</html>