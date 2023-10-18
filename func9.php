<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>func9.php</title>
</head>
<body>
    <?php
        function product(&$value){
            $value *= 5;
        }
        function pbv($value){
            $value += 10;
            echo "INSIDE pbv ".$value;
            echo "<br>";
        }
        $num = 2;
        product($num);
        echo $num;
        echo "<br>";
        pbv($num);
        echo $num;
    ?>
</body>
</html>