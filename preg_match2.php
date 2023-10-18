<!-- <?php
$pattern = "/\s/";
$replacement = "-";
$text = "Earth revolves around\nthe\tSun";
// Replace spaces, newlines and tabs 
echo preg_replace($pattern, $replacement, $text);
echo "<br>";
// Replace only spaces 
echo str_replace(" ", "-", $text);
?> -->


<?php
$pattern = "/^J/";
$names = array("Jhon Carter", "Clark Kent", "John Rambo");
$matches = preg_grep($pattern, $names);
// Loop through matches array and display matched names
foreach($matches as $match){
echo $match . "<br>";
}
?>