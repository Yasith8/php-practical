<?php
    session_start(); 

    if(isset($_SESSION['username'])) {
    //if(isset($_COOKIE['username'])) {
        echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";
      //  echo "<h1>Welcome " . $_COOKIE['username'] . "</h1>";
        echo "<a href='deletecookie.php'>Log Out</a>";
    } else {
        echo "Username not set"; 
    }

?>