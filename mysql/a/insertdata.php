<?php
    //1. connect to db -> mysqli_connect()

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "sem3";

    $con = new mysqli($host,$user,$pass,$db);

    //$con.query()

    //2. execute query --> mysqli_query()

    $sql = "INSERT INTO employee (name,nic,city) VALUES ('Kasun','123456789000','Colombo')";

    $con->query($sql);

    //3. close connection --> mysqli_close()

    $con->close();
?>