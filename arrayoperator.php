<?php
    $a = array("INT 219" => "Front End Web","INT220" =>"PHP", "INT221"=>"Laravel");

    $b = array("INT 222" => "Node js", "CSE316" =>"Operating System");

    $c = ($a+$b);
    var_dump($c);
    echo "<br>";
    var_dump($a == $b);
    echo "<br>";
    var_dump($a===$b);
    echo "<br>";
    var_dump($a!=$b);
    echo "<br>";
    var_dump($a<>$b);
    echo "<br>";
    var_dump($a!==$b);
?>