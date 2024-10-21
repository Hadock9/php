<a href='index_lab5.php' class='style_button'>lab 5</a><?php

$text = file_get_contents('files/Falovskij_text.txt');

$words = explode(' ', $text);

$min_length = PHP_INT_MAX;

$shortest_words = array();

foreach ($words as $word) {
    $length = strlen($word);
    if ($length < $min_length and $length > 0) {
        $min_length = $length;
        $shortest_words = array();
        $shortest_words[] = $word;
    } elseif ($length == $min_length) {
        $shortest_words[] = $word;
    }
}

echo 'Найкоротше слово(а): ';
echo implode(', ', $shortest_words);
echo ', довжина: ' . $min_length;
?>
