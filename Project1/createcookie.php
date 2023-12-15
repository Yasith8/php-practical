<?php
if (isset($_COOKIE['username'])) {
    header("Location: loggedDashboard.php");
} else {
    header("Location: login.html");
}
?>