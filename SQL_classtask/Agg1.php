<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT COUNT(E_SALARY) FROM employee";
    if($result = mysqli_query($conn, $sql)){
        while($row = mysqli_fetch_array($result)){
            echo "Total number of employees: " . $row['SUM(E_SALARY)'];
        }
    }
    else {
        echo "Error getting value " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>