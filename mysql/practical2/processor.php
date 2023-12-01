<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border="1">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>NIC</th>
        <th>CITY</th>
    </tr>

    <?php
  $host='localhost';
  $user = 'root';
  $pw='';
  $db='sem3';
  
  $conn=mysqli_connect($host,$user,$pw,$db);
  
  $name=$_POST['username'];
  $nic=$_POST['nic'];
  $city=$_POST['city'];
  
  $addSql="INSERT INTO employee (name,nic,city) VALUES ('$name','$nic','$city')";
  mysqli_query($conn,$addSql);
  

  $viewSql="SELECT * FROM employee";
  $resultSet=mysqli_query($conn,$viewSql);
  
  
  while ($row=mysqli_fetch_assoc($resultSet)) {
      //echo $row['id'],"-",$row['name'];
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["nic"] . "</td>";
      echo "<td>" . $row["city"] . "</td>";
      echo "</tr>";
    }
    
    
    
    mysqli_close($conn);
    ?>
</table>


</body>
</html>