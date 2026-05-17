<?php

function allWordsContainChar($words, $char) {

    foreach ($words as $word) {

        // Convert both to lowercase to make it case-insensitive
        if (strpos(strtolower($word), strtolower($char)) === false) {
            return false;
        }
    }
    return true;
}
$array1 = ["hola", "Php", "Html"];

var_dump(allWordsContainChar($array1, "h"));
echo "<br>";

var_dump(allWordsContainChar($array1, "l"));

?>
