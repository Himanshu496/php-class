<?php
    if(isset($_REQUEST['submit'])){
        if(filter_has_var(INPUT_POST,"name")&&$_POST["name"]==""){
            echo("Name not found");
        }else{
            echo("Name found");
        }
    }
?>
<form method = "post" action = "<?php echo $_SERVER["PHP_SELF"];?>">
    <label for = "inputName">Name : </label>
    <input type = "text" name = "name" id = "inputName">
    <input type = "submit" value = "Submit" name = "submit">
</form>

<!-- Can use in validation  -->