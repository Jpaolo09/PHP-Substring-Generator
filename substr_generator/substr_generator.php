<?php
    $str="The quick brown fox jumps over the lazy dog.0123456789, # @ + - ñ _";
    $word = "insert text here";
    $generated = "";

    for($i = 0; $i < strlen($word); $i++){
        ($i == 0) ? $generated = $generated.'substr($str, '.strpos($str, strtolower($word[$i])).', 1)' : $generated = $generated.'.substr($str, '.strpos($str, strtolower($word[$i])).', 1)';
    }

    echo 'echo ucwords('.$generated.');';
?>