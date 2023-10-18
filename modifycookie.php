<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
    <?php
        $cookie_name = "user";
        $cookie_Value = "Dinesh";
        setcookie($cookie_name,$cookie_Value,time()+3600);//86400 = 1day
    ?>
</head>
<body>
    <?php
        if(isset($_COOKIE[$cookie_name])){
            echo 'Cookie : '.$cookie_name. '  has been set<br>';
            echo "Value is : ".$_COOKIE[$cookie_name];
        }else{
            echo "Cookie is Not Set";
        }
    ?>
</body>
</html> 