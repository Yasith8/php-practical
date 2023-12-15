<?php
$name=$_POST['name'];
$password=$_POST['password'];

$conn = new mysqli("localhost","root","","sem3");
$sql="SELECT * FROM user WHERE name='$name'";
$result=$conn->query($sql);
//echo $name;
//var_dump($result);
//
//exit();

if($result->num_rows==1){
    //ok
    $row=$result->fetch_assoc();
    
    //1.password verify
    $storedPword=$row['password'];
    if(password_verify($password, $storedPword)){
        

        //2.log.txt

        $file=fopen("log.txt","a");
       
        date_default_timezone_set("Asia/Colombo");
        $date=date("Y|m|d h-i-s");

        fwrite($file,"$name - $date \n");

        fclose($file);
        
        //3. cookie user -> logged user
        setcookie("username",$name,time()+3600);
        header("Location: createcookie.php?user=$username");
        
        //4. redirect to dashboard.php
        
        //logout
        
        
        //delete cookie
        
    //log.txt

    //loginhtml
}else{
    echo "Your Passwords are Incorrect.Try Again!";
}
}
else{
    echo "There are no User called $name. Please Create New Account.";
}

$conn->close();
?>