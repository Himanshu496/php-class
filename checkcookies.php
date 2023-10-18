<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
    <?php
        setcookie("user1","I am alive for 15 seconds only",time()+15,'/');//86400 = 1day
    ?>
</head>
<body>
    <?php
        if(count($_COOKIE)>0){
            echo 'Cookie is enable';
        }else{
            echo "Cookie is disable";
        }
    ?>
</body>
</html> 