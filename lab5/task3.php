<?php
require("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex. 3</title>
</head>
<body>
    <a href='index_lab5.php' class='style_button'>lab 5</a>
   <?php
   $file = fopen("files/tag1.txt", "r") or die("Неможливо відкрити файл!");
   $table = "<table><tr><th>Теги</th><th>Опис</th></tr>";
   $count = 0;
   
   while(!feof($file)) {
     $count++;
     $tag = trim(fgets($file));
     $description = trim(fgets($file));
     $table .= "<tr><td><b>{$tag}</b></td><td>{$description}</td></tr>";
   }
   
   $table .= "</table>";
   fclose($file);
   
   echo $table;
   ?>
 
</body>
</html>