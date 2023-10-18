<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation examples 1</title>
</head>
<body>
    <?php
        $name = $email = $gender = $comment = $website = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <p2>PHP FORM Validation Exmaple</p2>
    <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name : <input type = "text" name = "name">
            <br>
            <br>
        E-mail : <input type = "text" name = "email">
        <br>
            <br>
        Website : <input type = "text" name = "website">
            <br>
            <br>
        Gender : <input type = "radio" name = "gender" value = "female">Female
            <input type = "radio" name = "gender" value = "male">Male
            <input type = "radio" name = "gender" value = "other">Other
            <br>
            <br>
        Comment : <textarea type = "comment" name = "comment" row = "5" cols = "40"></textarea>
            <br>
            <br>
        <input type = "submit" name = "submit" value = "Submit">       
    </form>
    <?php
        echo "<h2>Your Input : </h2>";
        echo "Name : ".$name;
        echo "<br>";
        echo "E-mail : ".$email;
        echo "<br>";
        echo "Website : ".$website;
        echo "<br>";
        echo "Gender : ".$gender;
        echo "<br>";
        echo "Comment : ".$comment; 
    ?>
</body>
</html>