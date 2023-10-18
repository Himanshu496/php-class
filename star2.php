<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        <input type = "text" name = "num">
        <input type = "submit">
    </form>
    <?php
        if($_POST!=null){
            $a = $_POST["num"];
            for($i = 1; $i<$a; $i++){
                for($j = $i+1; $j<$a; $j++){
                    echo "* ";
                }
                echo "<br>";
            }
        }
    ?>
</body>
</html>