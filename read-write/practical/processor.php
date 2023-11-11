<?php
 if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['repassword'])){
    if($_POST['password']===$_POST['repassword']){
        $userdata=$_POST['username']."-".$_POST['password'];
        $file=fopen("db.txt","a");
        fwrite($file,"$userdata \n");
        echo "Data has been saved";
        fclose($file);
    }else{
        echo "You password and re entered password must be same";
    }
 }
 else{
    echo "Please fill all fields";
    echo "<a href='form.html'>Back to Login</a>";
 }
?>