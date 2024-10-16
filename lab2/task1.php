<?php
require("../config.php");       

?>
<a href="index_lab2.php" class="style_button">lab 2</a>
<form method="post" action="task1.php">
    <label for="number1">Number 1:</label>
    <input type="text" name="number1" id="number1">

    <label for="number2">Number 2:</label>
    <input type="text" name="number2" id="number2">

    <button type="submit">Submit</button>
</form>


<?php
if (isset($_POST['number1'] )) {
    echo "Ця змінна визначена, тому вони мене надрукували.";
    $number1 = intval($_POST['number1']);
    $number2 = intval($_POST['number2']);

     

    echo "<p>" . $number1 - $number2 .  "</p>";
    echo "<p>" . $number1 * $number2 .  "</p>";
    echo "<p>" . $number1 % $number2 .  "</p>";
}

?>