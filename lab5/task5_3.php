<a href='index_lab5.php' class='style_button'>lab 5</a><?php

$text = file_get_contents('files/Voloshchuk_text.txt');

$words = explode(' ', $text);

$longest_word = '';
$longest_word_length = 0;

foreach ($words as $word) {
    $word_length = strlen($word);
    if ($word_length > $longest_word_length) {
        $longest_word = $word;
        $longest_word_length = $word_length;
    } elseif ($word_length === $longest_word_length) {
        $longest_words[] = $word;
    }
}

$longest_words[] = $longest_word;

echo 'Найдовше слово(-а) у тексті: ' . implode(', ', $longest_words) . ', довжина: ' . $longest_word_length;
?>
