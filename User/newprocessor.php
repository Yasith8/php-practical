<?php

if(isset($_POST['fullname']) && isset($_POST['dob']) && isset($_POST['gender']) && isset($_POST['status'])){
    if(strlen($_POST['fullname']) >= 3){
        $nameArr = explode(" ", $_POST['fullname']);
        $gen='';
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

        echo "<h1>Welcome $gen $nameArr[0]</h1>";
        echo "FullName: ".$_POST['fullname']."</br>";
        echo "Age: ".$age;

    } else {
        echo "Your FullName is Invalid.";
        echo "<a href='form.html'>Back to Form</a>";
    }
} else {
    echo "Some Required Data Fields seem to be Empty";
    echo "<a href='formNormal.html'>Back to Form</a>";
}


?>