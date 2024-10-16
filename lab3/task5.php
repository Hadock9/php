<a href="index_lab3.php" class="style_button">lab 3</a>
<?php
require("../config.php");

include_once("function.php");

$arr = [4, 5, 9, 12, 4, -1, 0];

echo "<h3>5.1</h3>";

echo "<p>Increasing </p>";
foo_task_5_1($arr);
echo "<p>Decreasing </p>";
foo_task_5_1($arr, "desc");


echo "<h3>5.2</h3>";

$n = 18;
$array = array();
    for ($i = 0; $i < $n; $i++) {
        $array[$i] = array();
        for ($j = 0; $j < $n; $j++) {
            $array[$i][$j] = rand(1, 100);
        }
    }

foo_task_5_2($n, $array);

?>