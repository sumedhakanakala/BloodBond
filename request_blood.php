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

$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$blood_group = $_POST['blood-group'];
$location = $_POST['location'];
$gender = $_POST['gender'];

// Save patient request to the database (optional)
// $sql = "INSERT INTO patients (username, name, email, phone, blood_group, location, gender) VALUES ('$username', '$name', '$email', '$phone', '$blood_group', '$location', '$gender')";
// mysqli_query($conn, $sql);

// Find matching donors
$sql_query = "SELECT * FROM approved WHERE blood_group='$blood_group' AND location='$location'";
$result = mysqli_query($conn, $sql_query);

$matching_donors = [];
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $matching_donors[] = $row;
    }
}

$_SESSION['matching_donors'] = $matching_donors;

mysqli_close($conn);

header("Location: donor_details.php");
exit();
?>
