<?php
session_start();

require("../config.php");
require("../db.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Обробка форми реєстрації
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Отримання та очищення даних з форми
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
     
            // Вставка нового користувача в базу даних
            $insert_stmt = $db_server->prepare("INSERT INTO user_for_session (username, password) VALUES (?, ?)");
            if ($insert_stmt) {
                $insert_stmt->bind_param("ss", $username, $password);
                if ($insert_stmt->execute()) {
                    $registration_success = "Користувача успішно зареєстровано!";
                } else {
                    $registration_error = "Помилка при реєстрації користувача.";
                }
                $insert_stmt->close();
            } else {
                $registration_error = "Помилка підготовки запиту для реєстрації.";
            }
       
       
}

// Отримання всіх зареєстрованих користувачів
$users = [];
$result = $db_server->query("SELECT username, password, created_at FROM user_for_session ORDER BY created_at DESC");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    $result->free();
} else {
    $fetch_error = "Помилка отримання користувачів: " . $db_server->error;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Реєстрація</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="form-container">
        <h1>Форма реєстрації</h1>
        <?php
            if (isset($registration_error)) {
                echo "<p class='message'>$registration_error</p>";
            }
            if (isset($registration_success)) {
                echo "<p class='success'>$registration_success</p>";
            }
        ?>
        <form action="" method="POST">
            <label for="username">Логін (прізвище латиницею):</label>
            <input type="text" id="username" name="username" pattern="[A-Za-z]+" title="Тільки латинські літери" required>
            
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Зареєструватися">
        </form>
    </div>

    <h2>Зареєстровані користувачі</h2>
    <?php
        if (isset($fetch_error)) {
            echo "<p class='message'>$fetch_error</p>";
        } else {
            if (count($users) > 0) {
                echo "<table>";
                echo "<tr><th>Логін</th><th>Пароль</th><th>Дата реєстрації</th></tr>";
                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($user['username']) . "</td>";
                    echo "<td>" . htmlspecialchars($user['password']) . "</td>";
                    echo "<td>" . htmlspecialchars($user['created_at']) . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Немає зареєстрованих користувачів.</p>";
            }
        }
    ?>
</body>
</html>
