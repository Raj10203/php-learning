<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php
    $str = "My name is Raj.";
    $num = 15;
    // echo '\n $str';
    echo "\n strilen(); :-" . strlen($str);
    echo "\n str_word_count(String);:-" . str_word_count($str);
    echo "\n strtoupper(String); :-" . strtoupper($str);
    echo "\n strtolower(String); :-" . strtolower($str);
    echo "\n str_replace(Old, New, String);" . str_replace("Raj", "Harsh", $str);
    echo "\n strrev(String);" . strrev($str);
    echo "\n trim(String);" . trim($str) . "\n";
    // var_dump($str);
    $x = explode(" ", $str,3);
    // var_dump($x);
    var_dump(is_iterable($x));
    $color = [
        "first" => "red",
        "second" => "green",
        "third" => 1522
    ];
    $num2 = 15.0;
    // var_dump($color);

    var_dump($num === $num2 ? false : true);

   

    // print_r(array_key_last($color));
    ?>
</pre>    
</body>
</html>