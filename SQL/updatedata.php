
<?php

    $conn = mysqli_connect("localhost","root","","demo");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "UPDATE testing SET gender = 'MALE' where first_name = 'suraj'";

    if (mysqli_query($conn, $sql)) {
        echo "Updated successfully";
    } else {
        echo "Error updating data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>