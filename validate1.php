<!-- This will show require
as we can see in forms that is mandatory -->
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .error{color: #FF0000;}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation examples 1</title>
</head>
<body>
    <?php
        $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["name"])){
                $nameErr = "Name is Required";
            }else{
                $name = test_input($_POST["name"]);
            }
            if(empty($_POST["email"])){
                $emailErr = "Email is Required";
            }else{
                $email = test_input($_POST["email"]);
            }
            if(empty($_POST["website"])){
                $websiteErr = "Website is Required";
            }else{
                $website = test_input($_POST["website"]);
            }
            if(empty($_POST["comment"])){
                $commentErr = "Comment is Required";
            }else{
                $comment = test_input($_POST["comment"]);
            }
            if(empty($_POST["name"])){
                $genderErr = "Gender is Required";
            }else{
                $gender = test_input($_POST["gender"]);
            }
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <p2>PHP FORM Validation Exmaple</p2>
    <p><span class = "error"> * required field</span></p>
    <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name : <input type = "text" name = "name">
            <span class = "error">*<?php echo $nameErr;?></span>
            <br>
            <br>
        E-mail : <input type = "text" name = "email">
            <span class = "error">*<?php echo $emailErr;?></span>
            <br>
            <br>
        Website : <input type = "text" name = "website">
            <span class = "error">*<?php echo $websiteErr;?></span>
            <br>
            <br>
        Gender : <input type = "radio" name = "gender" value = "female">Female
            <input type = "radio" name = "gender" value = "male">Male
            <input type = "radio" name = "gender" value = "other">Other
            <span class = "error">*<?php echo $genderErr;?></span>
            <br>
            <br>
        Comment : <textarea type = "comment" name = "comment" row = "5" cols = "40"></textarea>
            <span class = "error">*<?php echo $commentErr;?></span>
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