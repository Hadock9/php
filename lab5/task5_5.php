<a href='index_lab5.php' class='style_button'>lab 5</a>
<?php
$text = file_get_contents('files/Voloshchuk_text.txt');

$words = explode(' ', $text);

$found_words = array();

foreach ($words as $word) {
    if (substr($word, 0, 1) == "M" or substr($word, 0, 1) == "m") {
        $found_words[] = $word;
    }
}

echo "Слова, які починаються на першу літеру мого імені: " . implode(' ', $found_words);

?>