<?php

$myfile=fopen('swamy.txt','r');

echo fread($myfile,filesize('swamy.txt'))."<br>";
echo "<br>";
// echo fgets($myfile,filesize('swamy.txt'));  // it will gets the first line of the file..


fclose($myfile);

echo "feof end-of-file.." ."<br>";

$file1=fopen('swamy.txt','r');

while(!feof($file1))
{
   echo fgetc($file1);
}







?>