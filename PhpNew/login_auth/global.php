<!DOCTYPE html>
<html>
<body>

<?php

function hello()
{
	$x=10;
    echo $x;
}

hello();
try {
  echo $x;
} catch(Exception $e) {
  echo "Unable to divide. ";
} finally {
  echo "Process complete.";
}
echo "<br>";


   






?>

</body>
</html>
