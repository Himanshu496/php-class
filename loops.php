<?php
    $i = 1;
    while($i<=3){
        echo " The number is inside while : $i"."<br>";
        $i++;
    }

    $i = 1;
    do{
        echo " The number is inside do while : $i"."<br>";
        $i++;
    }while($i<=3);
    
    for($i = 1;$i<=3;$i++){
        echo " The number is inside for loop: $i"."<br>";
    }
    echo " FOR EACH LOOP : "."<br>";
    $arr = array("RED","GREEN","BLUE");
    foreach($arr as $index => $value){
        echo " index is $index  Array values are : $value"."<br>";
    }
?>