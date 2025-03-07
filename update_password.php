<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['username']) && isset($_POST['newpassword'])) {
    $username = $_POST['username'];
    $newpassword = $_POST['newpassword'];

    // Update the password in the database
    $sql_query = "UPDATE register SET password='$newpassword' WHERE username='$username'";
    
    if (mysqli_query($conn, $sql_query)) {
        echo "Password updated successfully.";
    } else {
        echo "Error updating password: " . mysqli_error($conn);
    }
} else {
    echo "Username and new password are required.";
}

mysqli_close($conn);
?>
