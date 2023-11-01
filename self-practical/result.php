<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
<?php
session_start();

// Retrieve and unserialize the $user array from the session
if (isset($_SESSION['arr'])) {
    $user = unserialize($_SESSION['arr']);
    print_r($user); // Output the user array



} 
?>
</body>
</html>

