<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_INFO</title>
</head>
<body>
    <h1>Enter UserName and Password</h1>

    <?php
        $msg = "";
        if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){
            if($_POST['username' == 123] && $_POST['password' == 123]){
                $_SESSION['username'] = 123;
                echo 'You have entered valid username and password';
            }else{
                $msg = "Wrong username or Password";
            }
        }
    ?>
    <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method = "post">
    <input type = "text" placeholder = "Name" name = "username"></input>
        <br>
        <input type = "Password" placeholder ="Password" name = "password"></input>
        <button type = "submit">Login</button>
        <br>
        <br>
        <br>
        <h4><?php echo $msg;?></h4>
        <a href = "myprofile.php">My profile</a>
    </form>
</body>
</html>