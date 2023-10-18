<form method = "post">
    <input type = "text" name = "num1">
    <input type = "text" name = "num2">
    <input type = "submit">
</form>
<?php
    if($_POST){
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $sum = $n1+$n2;
        echo "Add of $n1 and $n2 are $sum.";
    }
?>