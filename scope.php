<?php
    $a = 34;
    echo $a."<br>";
    define('y','22');
    {
        $a = 7;
        function a($a = 12){
            $a = 25;
            echo $a."<br>";
            echo y."<br>";
        }
        echo $a."<br>";
        echo y."<br>";
    }
    a();
    echo $a."<br>";
    echo y;
?>