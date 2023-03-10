<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
//$_SESSION["favcolor"] = "green";
//$_SESSION["favanimal"] = "cat";
echo "Session variables are set."."<br>";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
echo "<br>";
//unsetting the session...
//unset($_SESSION["favanimal"]);
//unset($_SESSION["favcolor"]);
//using unset we can remobve the varaibles
//session_unset();
//
//session_destroy();

?>
</body>
</html>