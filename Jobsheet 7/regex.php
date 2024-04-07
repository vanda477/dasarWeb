<?php
    $pattern = '/[a-z]/'; //Cocokkan huruf kecil.
    $text = 'This is a Sample Text.';

    if (preg_match($pattern, $text)) {
        echo "Huruf kecil ditemukan!";
    }
    else {
        echo "TIdak ada huruf kecil!";
    }

    $pattern = '/[0-9]+/';
    $text = 'There are 123 apples.';

    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan: " . $matches[0];
    }
    else {
        echo "TIdak ada yang cocok!";
    }

    $pattern = '/apple/';
    $replacement = 'banana';
    $text = 'I like apple pie';

    $new_text = preg_replace($pattern, $replacement, $text);
    echo $new_text; //Output: "I like banana pie."
    
    $pattern = '/go{2,2}d/'; //Cocokkan "god", "good", "gooood", dll.
    $text = 'god is good.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan: " . $matches[0];
    }
    else {
        echo "Tidak ada yang cocok!";
    }
?>