<a href='index_lab6.php' class='style_button'>lab 6</a>
<?php
require("../config.php");
$text = file_get_contents('text.txt');

echo "<h2>Завдання 1</h2>";
echo $text;

echo "<h2>Завдання 2</h2>";
preg_match_all('/<([a-z]+)\b[^>]*>/', $text, $tag_names);

foreach ($tag_names[1] as $tag_name) {
    echo $tag_name . '<br>';
}

echo "<h2>Завдання 3</h2>";
preg_match_all('/<([a-z]+)\b[^>]*>/', $text, $tags);

foreach ($tags[0] as $tag) {
    echo htmlentities($tag) . '<br>';
}
?>