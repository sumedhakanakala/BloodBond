<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "test";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$data = json_decode(file_get_contents("php://input"), true);
$username = $data['username'];
$status = $data['status'];

if ($status === 'approved') {
    // Retrieve donor details from the admin table
    $sql_query = "SELECT * FROM admin WHERE username='$username'";
    $result = mysqli_query($conn, $sql_query);
    if ($result && mysqli_num_rows($result) > 0) {
        $donor = mysqli_fetch_assoc($result);

        // Insert donor details into the approved table
        $insert_query = "INSERT INTO approved (name, username, age, email, phone, blood_group, location, gender) 
                         VALUES ('{$donor['name']}', '{$donor['username']}', '{$donor['age']}', '{$donor['email']}', '{$donor['phone']}', '{$donor['blood_group']}', '{$donor['location']}', '{$donor['gender']}')";
        
        if (mysqli_query($conn, $insert_query)) {
            // Remove donor details from the admin table
            $delete_query = "DELETE FROM admin WHERE username='$username'";
            if (mysqli_query($conn, $delete_query)) {
                echo "Donor approved and transferred successfully.";
            } else {
                echo "Error deleting donor from admin table: " . mysqli_error($conn);
            }
        } else {
            echo "Error inserting donor into approved table: " . mysqli_error($conn);
        }
    } else {
        echo "Donor not found in admin table.";
    }
} else {
    echo "Invalid status.";
}

mysqli_close($conn);
?>
