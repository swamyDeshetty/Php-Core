<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies 2</title>
</head>
<body>

<?php


$cookie_name='user';
$cookie_value='swamy patel';

setcookie($cookie_name,$cookie_value,time()+(5),'/');

if(!isset($_COOKIE[$cookie_name]))
{
    echo "The cookie ".$cookie_name.' is not set <br>';
}
else{

    echo "The cookie ".$cookie_name.' is set <br>';
    echo "The cookie value is ".$_COOKIE[$cookie_name];
}

// to destroy the cookie we use the time to negative time..

setcookie($cookie_name,$cookie_value,time()-3600);

echo "The cookie user is deleted <br>";


function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);


?>
    
</body>
</html>