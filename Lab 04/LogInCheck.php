<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!preg_match('/^[A-Za-z0-9._-]+$/', $username)) {
        echo "Username can only contain alphanumeric characters, period, dash, or underscore.<br>";
    }

    if (strlen($username) < 2) {
        echo "Username must contain at least two characters.<br>";
    }

    if (strlen($password) < 8) {
        echo "Password must be at least eight characters.<br>";
    }

    if (!preg_match('/[@#$%]/', $password)) {
        echo "Password must contain at least one of the special characters (@, #, $, %).<br>";
    }

    if (empty($usernameErrors) && empty($passwordErrors)) 
    {
        echo "Login successful!";
    }
}
?>
