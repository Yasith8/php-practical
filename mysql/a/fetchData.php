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
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "sem3";

 $con = new mysqli($host,$user,$pass,$db);
 $sql="SELECT * FROM employee";

 $resultSet=$con->query($sql);
 
 while($row=$resultSet->fetch_assoc()){
     echo "<tr>";
     echo "<td>".$row['id']."</td>";
     echo "<td>".$row['name']."</td>";
     echo "<td>".$row['nic']."</td>";
     echo "<td>".$row['city']."</td>";
     echo "";
     echo "</tr>";
    }

    $con->close();
    
    ?>

</table>
</body>
</html>