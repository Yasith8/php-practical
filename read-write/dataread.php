<?php
$file=fopen("dataread.txt","r");

while (!feof($file)) {
   echo fgets($file),"</br>";

   //fgetc()-get data character by character
   //fgets()-get data line by line
}

fclose($file);

?>