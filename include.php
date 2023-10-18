<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        include 'header.php';
    ?>
    <p>I am from include.php</p>
    <?php   
        require 'header.php';
    ?>
    
</body>
</html>