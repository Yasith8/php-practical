<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";
    echo "<a href='login.html'>Log Out</a>";
    

} else {
    header("Location: login.html");
    exit();
}
?>