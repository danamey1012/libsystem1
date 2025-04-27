<?php
session_start();

$valid_username = "admin";
$valid_password = "admin123";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
} else {
    echo "<script>
            alert('Invalid Username or Password!');
            window.location.href = 'login.html'; // balik sa login page
          </script>";
    exit();
}
?>
