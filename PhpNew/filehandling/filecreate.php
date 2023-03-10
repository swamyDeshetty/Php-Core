<?php


// if we want to write the code in the file but it doesn't exist then using the fopen we can create and write the code 
// in the file also

$file=fopen('php.txt','w');
fwrite($file,'swamy is php and python developer also ui developer') // it will automatically write code in the file

?>