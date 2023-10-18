<?php
    function a1($y = "I am a default Value of Funtion a1"){
        $x = "Hello I am from Funtion a1";
        echo $x." But ".$y;
    }
    a1();
    echo "<br>";
    a1("Hello I am a new local variable");
?>