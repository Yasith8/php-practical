
<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = [
        ['username' => "kamal", "password" => "1234"],
        ['username' => "Admin", "password" => "admin"],
        ['username' => "Udara", "password" => "900"]
    ];

    $isLoggedIn = false;

    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $isLoggedIn = true;
            $_SESSION['username']=$username;
            header("Location: dashboard.php");
            date_default_timezone_set("Asia/Colombo");
            $time=date("Y/m/d h:i:s");
            $file=fopen("user.txt","a");   
            fwrite($file,$_SESSION['username']." --- ".$time."\n");
            fclose($file);
            break;
        }
    }

    if (!$isLoggedIn) {
        echo "Invalid Credentials <a href='login.html'>Back to LogIn</a>";
    }
}
?>
