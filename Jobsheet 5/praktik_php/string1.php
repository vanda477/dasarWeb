<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Placeat ab assumenda ipsa, ipsum ex quam labore vitae alias accusamus 
        recusandae, reprehenderit unde aliquam minima consectetur delectus ipsam iure
         neque tempora.";
echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
?>