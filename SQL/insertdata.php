<?php

    $conn = mysqli_connect("localhost","root","","demo");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO testing(first_name,last_name,email,gender)
    VALUES('SURAJ','SINGH','suraj@jpmc.in','UNKNOWN')";

    if (mysqli_query($conn, $sql)) {
        echo "Column added successfully";
    } else {
        echo "Error adding column: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
