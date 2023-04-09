<!-- static method is used to called without creating the instance of the class -->

<!-- static propeties -->
<!-- static methods -->

<?php

class animal{

    public static $x=07;

    public static function name(){
        echo "My fav animal is the buffellow";
    }
    public static function color(){
        echo "My fav color is the PowderBlue";
    }

    public function __construct(){
        self::color();
    }
}

echo "my fav no is ". animal::$x;
echo "<br>";

animal::name(); 
echo "<br>";


new animal();


  $a = 5;
  echo $b; // This will result in a notice error


  include("nonexistent_file.php"); // This will result in a warning error


?>