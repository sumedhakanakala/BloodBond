<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "test";

    $conn = mysqli_connect($servername, $username, $password, $database_name);
    if (!$conn) {
        die("Connection Failed : " . mysqli_connect_error());
    }

    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $blood_group = $_POST['blood_group'];
        $location = $_POST['location'];
        $gender = $_POST['gender'];
        $donated_before = $_POST['donated_before'];
        $age = $_POST['age'];
        $health_problems = $_POST['health_problems'];
        $health_problems_details = $_POST['health_problems_details'];

        // Handling file upload
        if ($_FILES['id_proof']['error'] == 0) {
            $id_proof = $_FILES['id_proof']['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($id_proof);

            // Create directory if not exists
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }

            // Move uploaded file to target directory
            if (move_uploaded_file($_FILES['id_proof']['tmp_name'], $target_file)) {
                $id_proof_path = $target_file;
            } else {
                die("Error uploading file");
            }
        } else {
            $id_proof_path = NULL;
        }

        $sql_query = "INSERT INTO register (name, email, username, password, blood_group, location, gender, id_proof, donated_before, age, health_problems, health_problems_details) VALUES ('$name', '$email', '$username', '$password', '$blood_group', '$location', '$gender', '$id_proof_path', '$donated_before', '$age', '$health_problems', '$health_problems_details')";

        if (mysqli_query($conn, $sql_query)) {
            echo "Successfully Registered";
        } else {
            echo "Error: " . $sql_query . " " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
?>
