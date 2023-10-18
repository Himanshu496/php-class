<form method = "post">
    <input type = "text" name = "num1">
    <input type = "text" name = "num2">
    <input type = "submit">
</form>
<?php
if($_POST){
    
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if(($num1 == 0 || $num1 == 1) && ($num2 == 0 || $num2 == 1)){
            switch($num1){
                case 0:
                    {
                        switch($num2){
                            case 0:
                                $n = 0b00;
                                echo var_dump($n);
                                break;
                            case 1:
                                $n = 0b01;
                                echo var_dump($n);
                                break;
                            default:
                                echo "enter digits properly";
                                break;
                        }
                    }
                    break;
                case 1:
                    {
                        switch($num2){
                            case 0:
                                $n = 0b10;
                                echo var_dump($n);
                                break;
                            case 1:
                                $n = 0b11;
                                echo var_dump($n);
                                break;
                            default:
                                echo "Enter the digits properly";
                                break;
                        }
                    }
            }
        }
        else{
            echo 'enter 0 or 1 only {00,01,10,11 only works}';
        }
    }
?>