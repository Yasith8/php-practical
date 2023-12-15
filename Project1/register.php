<?php

$name=trim($_POST['name']);
$password=trim($_POST['password']);
$repassword=trim($_POST['re-password']);

$conn = new mysqli("localhost","root","","sem3");
$sql="SELECT * FROM user where name='".strtolower($name)."'";
$result=$conn->query($sql);
//var_dump(mysqli_num_rows($result));


if($password==$repassword){
    if(strlen($password)>=8){
        if(mysqli_num_rows($result)==0){
            //echo "OK";
            $encpword=password_hash($password,PASSWORD_DEFAULT);
            
            $sql="INSERT INTO user (name,password) VALUES ('$name','$encpword')";
            //exit($sql);
            $insResult=$conn->query($sql);

            if($insResult){
                echo "Successfully Registered";
                echo "Log into <a href='login.php'>Login form</a>";
            }
            else{
                echo "Contact Admin";
            }

        }else{
            echo "<h1>Your Username already used.</h1><br/>";
            echo "Go to <a href='index.html'>Register form</a>";
        }
        
    }else{
        echo "<h1>Passwor must have atleast 8 characters</h1><br/>";
        echo "Go to <a href='index.html'>Register form</a>";
    }
}else{
    echo "Password are not Matched";
    echo "Go to <a href='index.html'>Register form</a>";
}

$conn->close();
?>