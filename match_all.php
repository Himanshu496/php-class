<?php
$string = "The quick brown fox jumps over the lazy dog.";
$letter = 'j';
$pattern = '/\b' . $letter . '\w+\b/i';
if (preg_match_all($pattern, $string, $matches)) {
    echo "Words starting with '$letter': " . implode(', ', $matches[0]);
} else {
    echo "No words starting with '$letter' found.";
}
?>
