<a href='index_lab5.php' class='style_button'>lab 5</a>
<?php
require("../config.php");

$text = file_get_contents("files/Voloshchuk_text.txt");

$words = explode(" ", $text);

sort($words);

foreach ($words as $word) {
  echo $word . "<br>";
}
?>
