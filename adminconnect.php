<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "test";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $blood_group = $_POST['blood_group'];
    $location = $_POST['location'];
    $gender = $_POST['gender'];

    $sql_query = "INSERT INTO admin (name, username, age, email, phone, blood_group, location, gender) 
                  VALUES ('$name', '$username', '$age', '$email', '$phone', '$blood_group', '$location', '$gender')";

    if (mysqli_query($conn, $sql_query)) {
        echo "Record successfully inserted";
    } else {
        echo "Error: " . $sql_query . " " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
