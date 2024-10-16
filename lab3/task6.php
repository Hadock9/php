
<?php 
    require("../config.php");
    include_once("function.php");
?>

<html>
    <head>
        <title> Task 6 </title>
    </head>
    <a href="index_lab3.php" class="style_button">lab 3</a>
    <form method="get">
        <label for="number">Enter a natural value:</label>
        <input type="number" id="number" name="number" min="1" required>
        <input type="submit">
    </form>
</html>
<?php
    $n = $_GET["number"];
    task_6_foo($n);

    include_once('task7.php');
?>