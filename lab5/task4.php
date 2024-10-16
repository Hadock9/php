<?php
require("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex. 4</title>
</head>
<body>
   <a href='index_lab5.php' class='style_button'>lab 5</a>
   <?php
$filename = 'files/tag2.txt';
$content = file_get_contents($filename);
$lines = explode("\n", $content);
$count = count($lines);

echo "<table><tr><th>Тег</th><th>Опис</th></tr>";

foreach ($lines as $line) {
  $line = str_replace("<", "", $line);
  $line = str_replace(">", "", $line);
  $parts = explode(" ", $line, 2);
  $tag = trim($parts[0]);
  $desc = trim($parts[1]);
  echo "<tr><td>&lt$tag&gt</td><td>$desc</td></tr>";
}

echo "</table>";

$outfile = 'files/out.txt';
$outcontent = "Кількість $count які описані в tag2.txt файлі.";
file_put_contents($outfile, $outcontent);

$out = file_get_contents($outfile);
echo "<p>$out</p>";
   ?>
 
</body>
</html>