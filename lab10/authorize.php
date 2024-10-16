<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Початок сесії
session_start();

// Підключення до бази даних
require("../config.php");
require("../db.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Перевірка, чи вже авторизовано
if (isset($_SESSION['login'])) {
    header("Location: secret_info.php"); // Перенаправлення на захищену сторінку
    exit();
}

// Обробка форми авторизації
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Отримання даних з форми
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    // Підготовка запиту для перевірки користувача
    $stmt = $db_server->prepare("SELECT password FROM user_for_session WHERE username = ?");
    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows == 1) {
            // Користувача знайдено
            $stmt->bind_result($hashed_password);
            $stmt->fetch();
            
            // Перевірка пароля
            if (password_verify($password, $hashed_password)) {
                // Зберігання логіна в сесії
                $_SESSION['login'] = $username;
                $_SESSION['passwd'] = $hashed_password; // Зберігайте хеш пароля лише за потреби
                
                header("Location: secret_info.php"); // Перенаправлення на захищену сторінку
                exit();
            } else {
                $login_error = "Неправильний пароль.";
            }
        } else {
            $login_error = "Користувача з таким логіном не знайдено.";
        }
        $stmt->close();
    } else {
        $login_error = "Помилка підготовки запиту.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Авторизація</title>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-container { max-width: 400px; margin: 0 auto; }
        .form-container h1 { text-align: center; }
        .form-container form { display: flex; flex-direction: column; }
        .form-container label { margin-top: 10px; }
        .form-container input[type="text"],
        .form-container input[type="password"] { padding: 8px; margin-top: 5px; }
        .form-container input[type="submit"] { margin-top: 15px; padding: 10px; }
        .error { color: red; text-align: center; }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Авторизація</h1>
        <?php
            if (isset($login_error)) {
                echo "<p class='error'>$login_error</p>";
            }
        ?>
        <form action="" method="POST">
            <label for="username">Логін:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Увійти">
        </form>
        <p>Немає акаунта? <a href="register.php">Зареєструватися</a></p>
    </div>
</body>
</html>
