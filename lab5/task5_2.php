<a href='index_lab5.php' class='style_button'>lab 5</a>
<?php

$text = file_get_contents('files/Falovskij_text.txt');

$words = explode(" ", $text);

$counts = array_count_values($words);

arsort($counts);

$top_words = array_slice(array_keys($counts), 0, 2);

echo "Найчастіше зустрічаються слова: " . implode(", ", $top_words);
?>
