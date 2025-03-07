<?php
    // Include database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "test";

    $conn = mysqli_connect($servername, $username, $password, $database_name);
    if (!$conn) {
        die("Connection Failed : " . mysqli_connect_error());
    }

    // Retrieve file path from the database
    $username = ['username'];; // Replace this with the actual username, or get it from session/GET/POST
    $sql = "SELECT id_proof FROM register WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $file_path = $row['id_proof'];
        if ($file_path) {
            echo "<a href='$file_path' download>Download ID Proof</a>";
        } else {
            echo "No file found.";
        }
    } else {
        echo "No file found.";
    }

    mysqli_close($conn);
?>
