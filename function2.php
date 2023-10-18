<?php
    function product(&$value){
        $value*=5;
    }

    $num = 2;
    product($num);
    echo $num;
?>