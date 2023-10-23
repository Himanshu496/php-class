<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "CREATE TABLE employee (
        E_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        E_name VARCHAR(30) NOT NULL,
        E_salary INT(10) NOT NULL,
        E_DOJ TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        E_DEPT VARCHAR(50) NOT NULL
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table employee created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>