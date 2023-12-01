<html>
<head>
    <title>Employee Table</title>
    <link rel="stylesheet" href="./bootstrap-5.3.1/css/bootstrap.min.css">
    <script src="./bootstrap-5.3.1/js/bootstrap.bundle.js"></script>
</head>
<body>
    <h1>Employee Table</h1>

    <div class="row m-4">

        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                <th>Name</th>
                <th>NIC</th>
                <th>City</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="">
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
                    echo "<td><a href='update.php?id=".$row['id']."'>","Update","</a></td>";
                    echo "<td><a href='delete.php?id=".$row['id']."'>","Delete","</a></td>";
                    echo "</tr>";
                }
                
                mysqli_close($con);
                ?>
        </tbody>
    </div>
    </table>
</body>
</html>