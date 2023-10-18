<?php
$a = ["Sanjay","Sanjana","Sai"];
$y = implode(",",$a);
echo $y."<br>";
?>

<?php
$a = "Sanjay/Sanjana/Sai";
$y = explode(",",$a);
print_r ($y);
?>