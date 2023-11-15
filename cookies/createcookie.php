<?php
if (isset($_COOKIE['username'])) {
    header("Location: dashboard.php");
} else {
    header("Location: login.html");
}
?>