<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT into employee (E_id,E_name,E_salary,E_DOJ,E_DEPT) VALUES
                ('1002','Rahul','50000','2019-01-01','IT'),
                ('1003','Himesh','40000','2023-06-05','DEVELOPMENT'),
                ('1004','Raj','60000','2020-01-01','SALES'),
                ('1005','Rohan','70000','2021-01-01','PURCHAGE'),
                ('1006','Rajesh','80000','2022-01-01','FINANCE')";

    if (mysqli_query($conn,$sql)) {
        echo "Table Value employee inserted successfully";
    } else {
        echo "Error inserting table: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>

