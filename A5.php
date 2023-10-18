<?php
//three ways to define 
//first way
    $a[0] = 12;
    $a[1] = 3;
    $a[] = 'Ajay';
    $a[3] = 12.890;
    $a[4] = NULL;
    $a[] = True;
    //2nd way
    // $a = [12,3,'Ajay',12.809,NULL,True];
    //3rd way
    // $a= array(12,3,'Ajay',12.890,NULL, True);
    print_r($a);
?>