<?php
    $to_email = "himanshumaurya799@gmail.com";
    $subject = "Simple Email Test via PHP";
    $body = "Hi, This is email testing send mail directly by PHP script so don't reply it!";

    $header = "From: himanshumaurya232327@gmail.com";
    if(mail($to_email, $subject,$body, $header)){
        echo "Email successfully sent to the $to_email";
    }else{
        echo "Email sending failed>>>";
    }
?>  