<?php declare(strict_types = 1);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function add(int $a, int $b0){
            return $a+$b;
        }

        echo "5 + 10 = " . add(5,10);
        echo "7 + 13 = " . add(7,13);
        echo "2 + 4  = " . add(2,4);
    ?>
</body>
</html>