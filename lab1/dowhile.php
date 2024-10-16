<a href="index_lab1.php" class="style_button">lab 1</a>
<?php
require("../config.php");
echo "<h1>Dice Game</h1>";
echo "<p>Roll the dice until you get a 6!</p>";
$rolls = 0;
do {
    // Roll the dice
    $roll = rand(1, 6);
    echo "You rolled a " . $roll . "<br>";
    $rolls++;
} while ($roll != 6);
echo "<p>It took you " . $rolls . " rolls to get a 6!</p>";
?>
