<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Oct 10</title>
</head>

<body>
    <form method="GET">
        <input type="text" name="password" placeholder=" Enter Password">
        <input type="submit" value="Submit" />
    </form>
</body>

</html>
<?php
if ($_GET) {
    // $password = "P@ssw0rd123";
    $password = $_GET['password'];
    $pattern_uppercase = '/[A-Z]/';
    $pattern_lowercase = '/[a-z]/';
    $pattern_digit = '/[0-9]/';
    $pattern_special_char = '/[!@#$%^&*(),.?":{}|<>]/';

    if (
        strlen($password) >= 8 &&
        preg_match($pattern_uppercase, $password) &&
        preg_match($pattern_lowercase, $password) &&
        preg_match($pattern_digit, $password) &&
        preg_match($pattern_special_char, $password)
    ) {
        echo "Strong password.";
    } else {
        echo "Weak password. Please include uppercase, lowercase, digit, and special character.";
    }
}
?>