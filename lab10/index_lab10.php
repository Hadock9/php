<?php
require("../config.php");
 
session_start();

session_unset();   
session_destroy();  
?>
 

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab 10</title>
    <link rel="stylesheet" href="../navigation.css">
</head>
<body>
    <div class="navigation">
        <a href="../index.php" class="style_button">На головну</a>
        <a href="authorize.php">Авторизуватися</a><br>
        <a href="register.php">Реєстрація нового користувача</a>
        <a class="button" class="button" href="task1.php">Task 2</a>
        <a class="button" class="button" href="secret_other.php">Task 3-4</a>
        <a class="button" class="button" href="register.php">Task 5</a>
        <a class="button" class="button" href="task4.php">Task 4</a>
        <a class="button" class="button" href="task5.php">Task 5</a>
        <a class="button" class="button" href="task6.php">Task 6</a>
    </div>
</body>
</html>
