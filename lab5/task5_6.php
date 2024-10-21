<a href='index_lab5.php' class='style_button'>lab 5</a>
<?php
$file = 'files/Falovskij_text.txt';
$text = file_get_contents($file);

$text = str_replace('о', 'О', $text);
echo $text;
?>