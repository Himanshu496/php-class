<form method = "post">
    <input type = "text" name = "num">
    <input type = "submit">
</form>
<?php
    if($_POST){
        $n = $_POST['num'];
        $sum = 0;
        $temp = $n;
        while($temp!=0.1){
            $val = $temp%10;
            echo "$temp <br>";
            $sum = $sum+($val*$val*$val);
            $temp=$temp/10;
        }
        if($n==$sum){
            echo "$n is an armstrong number";
        }else{
            echo "$n is not an armstrong number";
        }
    }
?>