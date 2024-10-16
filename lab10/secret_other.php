<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Початок сесії
session_start();

require("../config.php");
require("../db.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Перевірка авторизації користувача
if (!isset($_SESSION['login']) || !isset($_SESSION['passwd'])) {
    header("Location: authorize.php");  
    exit();
}

 
$username = $_SESSION['login'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Інша секретна сторінка</title>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .logout { margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Інша секретна сторінка</h1>
    <p>Ви увійшли як користувач <strong><?php echo htmlspecialchars($username); ?></strong></p>
    
    <div class="logout">
        <a href="secret_info.php">До секретної інформації</a> | 
        <a href="./index_lab10.php">Вийти</a>
    </div>
</body>
</html>
