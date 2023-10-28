<?php
if (isset($_GET['user'])) {
    $username = $_SESSION['username'];
    //$username = $_COOKIE['username'];
    setcookie("username", $username, time() + 3600); 
    header("Location:dashboard.php");
} else {
    header("Location:login.html");
}
?>