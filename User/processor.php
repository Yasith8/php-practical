<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap min css file -->
    <link rel="stylesheet" href="bootstrap-5.3.1/css/bootstrap.min.css">
    <!-- Bootstrap bundle min js file -->
    <script src="bootstrap-5.3.1/js/bootstrap.bundle.js"></script>
    <title>Welcome</title>
</head>
<body>
<?php
$nameArr = [];
$errorMsg = ''; // Variable to store error message
$gen='';

if(isset($_POST['fullname']) && isset($_POST['dob']) && isset($_POST['gender']) && isset($_POST['status'])){
    if(strlen($_POST['fullname']) >= 3){
        $nameArr = explode(" ", $_POST['fullname']);
        $genArr=$_POST['gender'];
        if($genArr[0]=='male'){
            $gen='Mr.';
        }elseif($genArr[0]=='female'){
            $statusAr=$_POST['status'];
            $gen=$statusAr[0];
        }
        $dobArr=$_POST['dob'];
        $dob=explode("-",$dobArr);
        $age=2023-$dob[0];

    } else {
        $errorMsg = "Your FullName is Invalid.";
    }
} else {
    $errorMsg = "Some Required Data Fields seem to be Empty";
}

if(!empty($errorMsg)) {
    echo $errorMsg; // Display error message if present
    echo "<a href='form.html'>Back to Form</a>";
} else {
    // If no error, display the welcome message
?>
<div class="mt-5"></div>
<div class="mt-5"></div>
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6 card mt-5">
        <div class="card-header text-center fs-1 fw-bold">Welcome <?php echo "$gen $nameArr[0]"; ?></div>
        <div class="card-body">
            <div class="text-center"><h3><?php echo "FullName: ".$_POST['fullname'] ?></h3></div>
            <div class="text-center"><h3><?php echo "Age: ".$age ?></h3></div>
        </div>
    </div>
    <div class="col-3"></div>
    </div>
<?php
}
?>
</body>
</html>
