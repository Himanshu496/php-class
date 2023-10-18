<?php
    session_start();
?>
<?php
    if(isset($_SESSION["username"])){
        echo "My username is ".$_SESSION['username']."<br>";
        echo "Click here to <a href = 'sessionlogout.php'>Logout</a>";
    }else{
        echo "Please login to see profile <br>
            <a href = 'sessionlogin.php'>Login</a>";
    }
?>