<a href='index_lab6.php' class='style_button'>lab 6</a>
<?php
require("../config.php");

$text = file_get_contents('my_html.txt');

$body_text = preg_replace("/<(?:\"[^\"]*\"['\"]*|'[^']*'['\"]*|[^'\">])+>/", " ", $text);
$text_whithout_whitespaces = preg_replace('/\s+/', ' ', $body_text);

echo $text_whithout_whitespaces;

?>

