<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <!-- Bootstrap min css file -->
    <link rel="stylesheet" href="bootstrap-5.3.1/css/bootstrap.min.css">
    <!-- Bootstrap bundle min js file -->
    <script src="bootstrap-5.3.1/js/bootstrap.bundle.js"></script>
</head>
<body>
<body>
    <?php
    $id=$_GET['id'];
    $con = mysqli_connect("localhost","root","","sem3");
    $sql = "SELECT * FROM employee WHERE id=$id";
                
    $rs = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($rs);
    //var_dump($row);

    mysqli_close($con);
    ?>


    <div class="row mt-5">
        <div class="col-4"></div>
        <div class="col-4 card">
            <div class="card-header text-center">
                <h1>User Data Form</h1>
            </div>
            <div class="card-body">
                <form action="insert.php" method="POST">
                    <div class="row">
                        <label for="name" class="col-4">Name:</label>
                        <div class="col-8">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" value="<?php echo $row['name']?>">
                        </div>
                    </div>


                    <div class="row mt-2">
                        <label for="nic" class="col-4">NIC:</label>
                        <div class="col-8">
                            <input type="text" name="nic" class="form-control" id="nic" placeholder="Enter Your NIC" value="<?php echo $row['nic']?>">
                        </div>
                    </div>


                    <div class="row mt-2">
                        <label for="city" class="col-4">City:</label>
                        <div class="col-8">
                            <select name="city" id="city" class="form-select">
                                <!-- <option value="Colombo">Colombo</option>
                                <option value="Kandy">Kandy</option>
                                <option value="Jaffna">Jaffna</option>
                                <option value="Galle">Galle</option> -->

                                <?php
                                $cities=array("Colombo","Galle","Jaffna","Kandy");

                                foreach ($cities as $city) {
                                    if($city==$row['city']){
                                        echo "<option value='$city' selected>$city</option>";
                                    }else{
                                        echo "<option value='$city' >$city</option>";
                                    }
                                    
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4"><button type="reset" class="btn btn-outline-danger w-100">Reset</button></div>
                        <div class="col-4"></div>
                        <div class="col-4 text-end"><button type="submit" class="btn btn-success w-100">Submit</button></div>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</body>
</body>
</html>