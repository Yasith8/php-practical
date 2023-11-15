
<?php
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
            setcookie("username", $username, time() + 3600);
            header("Location: createcookie.php?user=$username");
            break;
        }
    }

    if (!$isLoggedIn) {
        echo "Invalid Credentials <a href='login.html'>Back to LogIn</a>";
    }
}
?>
