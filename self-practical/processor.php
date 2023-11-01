<?php

//220001	2001111111 
  session_start();
  if(isset($_POST['index'])&&isset($_POST['nic'])){
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

   $sql="SELECT * FROM user";
   $result = $conn->query($sql);
  
   $result = mysqli_query($conn, $sql);

   $data = array();

   if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row; 
      }
   } else {
       echo "0 results";
  }

  foreach ($data as $user) {
    if($user["index"]==$_POST['index']&&$user['nic']==$_POST['nic']){
      $_SESSION['arr']=serialize($user);
      header("Location: result.php");
      exit;
  }

  }
 }
  else{
    echo "Required User Input Fields need to be filled";
  }
?>