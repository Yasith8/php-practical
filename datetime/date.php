<?php
date_default_timezone_set("Asia/Colombo");
  echo date("D");  //date
  echo date("M");  //month
  echo date("Y");  //Year
  
  echo "</br>";
  
  echo date("h"); //hour normal
  echo date("H"); //hour 24h
  echo date("i");
  echo date("s");
  
  echo "</br>";
  echo "Normal Date:- ",date("Y/m/d h:i:s");
  echo "</br>";
  echo "Normal Date:- ",date("Y-m-d h:i:s");
  echo "</br>";
  echo "Normal Date:- ",date("Y|m|d h-i-s");
  echo "</br>";
  echo "International Date:- ",date("Y/m/d H:i:s");

?>