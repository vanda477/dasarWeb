<?php
$myArray = array(); 
if (empty($myArray)){
    echo "Array tidak terdefinisi atau kosong.";
} else {
    echo "Array terdefinisi dan tidak kosong.";
}

if (empty($nonExistentVar)){
    echo "<br>Variabel tidak terdefinisi atau kosong.";
} else {
    echo "<br>Variabel tidak terdefinisi dan tidak kosong.";
}
?>