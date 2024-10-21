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
        <a   class="button" href="authorize.php">Авторизуватися</a> 
        <a   class="button" href="register.php">Реєстрація нового користувача<a>
        <a   class="button" href="task1.php">Task 2</a>
        <a   class="button" href="secret_other.php">Task 3-4</a>
        
    </div>
</body>
</html>
