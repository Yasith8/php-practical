<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <?php
        $id = $_GET['id'];

        $con = mysqli_connect("localhost","root","","sem3");

        $sql = "SELECT * FROM employee WHERE id = $id";

        $rs = mysqli_query($con,$sql);

        $row = mysqli_fetch_array($rs);

        var_dump($row);

        mysqli_close($con);

    ?>
    <h1>Employee Update Form </h1>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value= <?= $row['id'] ?> />

        Name: <input type="text" name="name" value= "<?= $row['name'] ?>" /><br/> <br/>

        NIC: <input type="text" name="nic" value=" <?= $row['nic'] ?> "><br/><br/>

        City :
        <select name="city">
            <?php
                if($row['city'] == 'Colombo'){
                    echo "<option selected >Colombo</option>";
                }else{
                    echo "<option>Colombo</option>";
                }

                if($row['city'] == 'Kandy'){
                    echo "<option selected >Kandy</option>";
                }else{
                    echo "<option >Kandy</option>";
                }

                if($row['city'] == 'Jaffna'){
                    echo "<option selected >Jaffna</option>";
                }else{
                    echo "<option >Jaffna</option>";
                }

                if($row['city'] == 'Galle'){
                    echo "<option selected >Galle</option>";
                }else{
                    echo "<option >Galle</option>";
                }
            ?>
        </select><br/><br/>
        <button>Submit</button>
    </form>
</body>

</html>