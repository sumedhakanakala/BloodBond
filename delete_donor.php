<?php
$servername = "localhost";
$dbUsername = "root";
$password = "";
$database_name = "test";

$conn = mysqli_connect($servername, $dbUsername, $password, $database_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? ''; // Use null coalescing to handle missing username

    if (!empty($username)) {
        $username = mysqli_real_escape_string($conn, $username); // Sanitize input
        $sql_query = "DELETE FROM admin WHERE username = '$username'";

        if (mysqli_query($conn, $sql_query)) {
            echo "Record successfully deleted";
        } else {
            echo "Error: " . $sql_query . " " . mysqli_error($conn);
        }
    } else {
        echo "Error: Username is missing.";
    }
}

mysqli_close($conn);
?>
