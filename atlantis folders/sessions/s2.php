<?php
session_start();
unset(
    $_SESSION["favcolor"] = "green";); 

echo "All session variables are now removed, and the session is destroyed."
?>
