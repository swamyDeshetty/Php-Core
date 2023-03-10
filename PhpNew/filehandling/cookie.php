<?php
$cookie_name = "user";
$cookie_value = "swamy patel";
setcookie($cookie_name, $cookie_value, time() + (10), "/"); // 86400 = 1 day   //if we give 10 it takes as 10sec it will deletes after the 10sec


if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}

// Set a cookie with a name, value, and expiration time
setcookie("username", "john_doe", time()+3600);

// Get the value of the "username" cookie
$username = $_COOKIE["username"];

// Delete a cookie by setting its expiration time to a past date
setcookie("username", "", time()-3600);


?>

</body>
</html>