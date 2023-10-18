<?php
    $my_url = "www.help66.com";
    if(preg_match("/help/",$my_url)){
        echo "the url $my_url contains help";
    }else{
        echo "the url $my_url does not contains help";
    }
?>
<br>
<?php
    $my_text = "I love Regular Expressions";
    $my_array = preg_split("/ /",$my_text);
    print_r($my_array);
?>

<br>

<?php
    $pattern = '/[he]/';
    $text = "We at help66 strive to make help helpful at help66.com";
    $text = preg_replace("/help/",'<span
    style = "background:yellow">Help</span>',$text);
    $text = preg_match($pattern,$my_text);
    echo $text;
?>