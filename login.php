<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "test";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_query = "SELECT * FROM register WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql_query);

    if (mysqli_num_rows($result) == 1) {
        // Valid credentials
        $_SESSION['username'] = $username;
        header("Location: main.html");
        exit;
    } else {
        // Invalid credentials
        echo "Invalid Username or Password";
    }
} else {
    echo "Username and Password are required";
}

mysqli_close($conn);
?>
