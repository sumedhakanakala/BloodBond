<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "test";

    $conn = mysqli_connect($servername, $username, $password, $database_name);

    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $blood_group = $_POST['blood_group'];

        $sql_query = "SELECT * FROM approved_donors WHERE blood_group = '$blood_group'";
        $result = mysqli_query($conn, $sql_query);

        if (mysqli_num_rows($result) > 0) {
            $donors = mysqli_fetch_all($result, MYSQLI_ASSOC);
            echo json_encode($donors);
        } else {
            echo json_encode([]);
        }
    }

    mysqli_close($conn);
?>
