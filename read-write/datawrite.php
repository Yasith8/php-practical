<?php
 $file=fopen("data.txt","a");

 //w-delete all before add new
 //a-all new can add with exist data

 fwrite($file,"W3 Campus Colombo \n");

 fclose($file);
?>