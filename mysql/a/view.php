<html>
<head>
    <title>Employee Table</title>
</head>
<body>
    <h1>Employee Table</h1>

    <table border="1px" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>NIC</th>
                <th>City</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $con = mysqli_connect("localhost","root","","sem3");
                


                $sql = "SELECT * FROM employee";

                $rs = mysqli_query($con,$sql);

                while($row = mysqli_fetch_assoc($rs)){
                    echo "<tr>";
                    echo "<td>",$row['id'],"</td>";
                    echo "<td>",$row['name'],"</td>";
                    echo "<td>",$row['nic'],"</td>";
                    echo "<td>",$row['city'],"</td>";
                    echo "<td>","Update","</td>";
                    echo "<td><a href='d'>","Delete","</a></td>";
                    echo "</tr>";
                }

                mysqli_close($con);
            ?>
        </tbody>
    </table>
</body>
</html>