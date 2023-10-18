<form method = "post">
    <input type = "text" name = "num">
    <input type = "submit">
</form>
<?php
    if($_POST){
        $n = $_POST['num'];
        for($i = 1; $i<=$n; $i++){
            for($j = 1; $j<=$i; $j++){
                echo "* ";

            }
            echo "<br>";
        }
    }
?>