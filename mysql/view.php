<?php
//1.connect db
$conn=mysqli_connect('localhost','root','','sem3');
//2.execute query
$sql="SELECT * FROM employee";
$resultsSet=mysqli_query($conn,$sql);
//3.fetch resut


//method1
//echo "----------------------array--------------------";
//echo "</br>";
//$array=mysqli_fetch_array($resultsSet);
//var_dump($array);



//echo "</br>";
//method2
//echo "----------------------assoc--------------------";
//echo "</br>";
//$assoc=mysqli_fetch_assoc($resultsSet);
//var_dump($assoc);

while ($row=mysqli_fetch_assoc($resultsSet)) {
    echo $row['id'],"-",$row['name'];
}


//4.close connection
mysqli_close($conn);
echo "</br>";
?>