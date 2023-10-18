<?php
// Establish a connection to the database
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "demo";

    $conn = mysqli_connect($servername, $username, "", $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "ALTER TABLE testing ADD gender VARCHAR(10)";

    if (mysqli_query($conn, $sql)) {
        echo "Column added successfully";
    } else {
        echo "Error adding column: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>