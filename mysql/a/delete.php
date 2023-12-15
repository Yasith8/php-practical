<?php
$id = $_GET['id'];

$con = mysqli_connect("localhost","root","","sem3");

$sql = "DELETE FROM employee WHERE id = $id";

$r = mysqli_query($con,$sql);

mysqli_close($con);

header("Location: view.php");
?>