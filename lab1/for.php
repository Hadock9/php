<a href="index_lab1.php" class="style_button">lab 1</a>
<?php
require("../config.php");
echo "<h1>Random Multiplication Table</h1>";
echo "<table border='1'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        // Generate a random number between 1 and 10
        $randNum = rand(1, 10);
        echo "<td>" . ($i * $randNum) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
