<form method = "post">
    <input type = "text" name = "grade">
    <input type = "Submit">
</form>
<?php
    if($_POST){
        $n = $_POST['grade'];
        if($n>=55 && $n <65)
            echo "D GRADE";
        else if($n>=65 && $n <75)
            echo "C GRADE";
        else if($n>=75 && $n <85)
            echo "B GRADE";
        else if($n>=85 && $n <95)
            echo "A GRADE";
        else if($n>=95 && $n<100)
            echo "O GRADE";
        else 
            echo "invalid input";
    }
    // else{
    //     echo "Enter the output first then click on submit";
    // }
?>