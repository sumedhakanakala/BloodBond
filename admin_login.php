<?php
session_start();

// Replace these credentials with your own
$admin_username = 'admin';
$admin_password = 'password123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin.html');
        exit();
    } else {
        echo '<script>alert("Invalid username or password"); window.location.href="admin_login.html";</script>';
    }
} else {
    header('Location: admin_login.html');
    exit();
}
?>
