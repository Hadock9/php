<a href="index_lab1.php" class="style_button">lab 1</a>
<?php
require("../config.php");


$var1 = "Hello";
$var2 = "world";
$num = 1;


$varName = "var" . $num;


echo $$varName . " " . $var2;


?>