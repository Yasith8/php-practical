<?php

$host='localhost';
$user='root';
$password='';
$db='sem3';

$conn=mysqli_connect($host,$user,$password,$db);

//check connection
//var_dump($conn)

$sql="INSERT INTO employee(name,nic,city) VALUES('Adudi Perera','200110203044','Wadduwa')";
mysqli_query($conn,$sql);
mysqli_close($conn);
?>