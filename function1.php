<?php
    $a = 34;
    echo $a;
    define('y','22');{
        $a = 7;
        function a(){
            $a = 25;
            echo $a."<br>";
            echo y;
        }
    }
    a();
    echo $a."<br>";
    echo 'y';
?>