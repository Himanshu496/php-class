<form method = "post">
    <input type = "text" name = "num1">
    <input type = "text" name = "num2">
    <input type = "submit">
</form>
<?php
    if($_POST){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        for($i = 1; $i<=$n; $i++){
            for($j = 1; $j<=$i; $j++){
                echo "* ";

            }
            echo "<br>";
        }
    }
?>