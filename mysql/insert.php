<?php


    $name=$_POST['username'];
    $nic=$_POST['nic'];
    $city=$_POST['city'];

    $host='localhost';
    $user='root';
    $pw='';
    $db='sem3';
    
    $conn=mysqli_connect($host,$user,$pw,$db);

    //var_dump($conn);
    $sql="INSERT INTO employee (name,nic,city) VALUES ('$name','$nic','$city')";
    mysqli_query($conn,$sql);
    mysqli_close($conn);

?>