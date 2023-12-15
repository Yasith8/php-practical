<?php

if (isset($_COOKIE['username'])) {
    echo "<h1>Welcome " . $_COOKIE['username'] . "</h1>";
    echo "<a href='deletecookie.php'>Log Out</a>";
} else {
    header("Location: login.php");
    exit();
}
?>
