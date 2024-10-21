<a href='index_lab5.php' class='style_button'>lab 5</a>
<?php
require("../config.php");

$text = file_get_contents("files/p1.txt");
 
$text = preg_replace('/\s+/', ' ', $text);  
echo $text . "\n";

 
$sentences = preg_split('/[.!?]+/', $text, -1, PREG_SPLIT_NO_EMPTY); 

echo "Кількість речень: " . count($sentences) . "\n";

 
echo strrev("CSS") . "\n";

echo "<br><hr>";

$text = file_get_contents("files/var25.txt");
 
$sentences = preg_split('/[.!?]+/', $text, -1, PREG_SPLIT_NO_EMPTY);
if (isset($sentences[2])) {
    // Отримуємо третє речення
    $thirdSentence = trim($sentences[2]);

    // Визначаємо першу літеру третього речення
    $firstLetter = mb_substr($thirdSentence, 0, 1);
    echo "Перша літера третього речення: '" . $firstLetter . "'<br>";
    $firstLetter = strtolower($firstLetter);
    // Розбиваємо текст на слова
    $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

    // Лічильник слів
    $count = 0;

    // Перевіряємо кожне слово
    foreach ($words as $word) {
        // Очищаємо слово від розділових знаків
        $cleanWord = trim($word, ",.!?");
        $cleanWord = strtolower($cleanWord);
        // Якщо слово починається з літери, яка збігається з першою літерою третього речення
        if (mb_substr($cleanWord, 0, 1) === $firstLetter) {
            $count++;
        }
    }

    echo "Кількість слів, що починаються з літери '" . $firstLetter . "': " . $count;
} else {
    echo "Третього речення немає.";
}


echo "<br><hr>";
$text = file_get_contents("files/var26.txt");
$sentences = preg_split('/([.!?]+)/', $text, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

$countReplacements = 0;

 
for ($i = 0; $i < count($sentences); $i += 2) {
    $sentence = $sentences[$i];
    $punctuation = $sentences[$i + 1] ?? '';  

    if (strpos($sentence, ':') !== false) {
       
        $newSentence = str_replace('!', '?', $sentence . $punctuation);
       
        $countReplacements += substr_count($sentence . $punctuation, '!');
       
        $sentences[$i] = $newSentence;
        $sentences[$i + 1] = '';  
    }
}

 
$newText = implode('', $sentences);

 
echo "Оновлений текст: " . $newText . "<br>";
echo "Кількість замін: " . $countReplacements;
?>