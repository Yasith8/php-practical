<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>NIC</th>
            <th>City</th>
        </tr>
    <?php
    $name=$_POST['username'];
    $nic=$_POST['nic'];
    $city=$_POST['city'];

    $host='localhost';
    $user = 'root';
    $pw='';
    $db='sem3';
    
    $conn=mysqli_connect($host,$user,$pw,$db);

    $nameSql="SELECT * FROM employee WHERE name LIKE %$name%";
    $nicSql="SELECT * FROM employee WHERE name=$nic";
    $citySql="SELECT * FROM employee WHERE name=$city";

    //$nameResultSet=mysqli_query($conn,$nameSql);
    //var_dump($nameResultSet);

    $nicResultSet=mysqli_query($conn,$nicSql);
    while($row=mysqli_fetch_assoc($nicResultSet)){
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["nic"] . "</td>";
      echo "<td>" . $row["city"] . "</td>";
      echo "</tr>";
    };
    //$cityResultSet=mysqli_query($conn,$citySql);
    //var_dump($cityResultSet);
    
    mysqli_close($conn);
    
    ?>
    </table>
</body>
</html>

