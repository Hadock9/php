<a href="index_lab1.php" class="style_button">lab 1</a>
<?php
require("../config.php");

$var = "Hello, world!";


$ref =& $var;


$ref = "Goodbye, world!";


echo $var;
?>