<a href='index_lab6.php' class='style_button'>lab 6</a>
<?php 
require("../config.php");
?>

<html>
    <body>
        <form action="task2.php" method="POST">
            <input type="text" name="word">
            <button type="submit">Submit</button>
        </form>
    </body>
</html>


<?php

$text = file_get_contents('text.txt');

$pattern = '/\b\w*tag\w*\b|';
$pattern = $pattern . '\b\w*HTML\w*\b|\b\w*';
$pattern = $pattern . preg_quote($_POST['word']) . '\w*\b/i';

preg_match_all($pattern, $text, $matches);

$sentences = preg_split('/(?<=[.?!])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
$sentence_match_count = array();
foreach ($sentences as $sentence) {
    $count = preg_match_all($pattern, $sentence, $matches);
    if ($count > 0) {
        $sentence_match_count[$sentence] = $count;
    }
}

arsort($sentence_match_count);

foreach ($sentence_match_count as $sentence => $count) {
    $sentence = preg_replace($pattern, '<b>$0</b>', $sentence);
    echo $sentence . "<br>";
}
?>