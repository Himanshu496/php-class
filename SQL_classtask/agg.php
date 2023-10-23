<?php
    $link = mysqli_connect('localhost', 'root', "", "demo");
    if ($link == false) {
        die("Could not connect" . mysqli_connect_error());
    }

    $sql = "SELECT E_NAME, SUM(E_SALARY) FROM employee GROUP BY E_NAME having SUM(E_SALARY)>10000 order by SUM(E_SALARY) asc";

    if ($result = mysqli_query($link, $sql)) {
        while ($row = mysqli_fetch_array($result)) {

            echo $row['E_NAME'] . " = " . $row['SUM(E_SALARY)'];

            echo "<br />";

        }
    } else {
        echo "Query could not be executed, " . mysqli_error($link);
    }


    mysqli_close($link);
?>