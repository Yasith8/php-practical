<?php

$host='localhost';
  $user = 'root';
  $pw='';
  $db='sem3';
  
  $conn=mysqli_connect($host,$user,$pw,$db);
  
  $name=$_POST['name'];
  $nic=$_POST['nic'];
  $city=$_POST['city'];
  
  $addSql="INSERT INTO employee (name,nic,city) VALUES ('$name','$nic','$city')";
  mysqli_query($conn,$addSql);

  mysqli_close($conn);

  header("Location:view.php");
?>