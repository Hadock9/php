<?php
require("../config.php");
require("../db.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Обробка даних форми при її відправці
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tema = mysqli_real_escape_string($db_server, $_POST['tema']);
    $zagol = mysqli_real_escape_string($db_server, $_POST['zagol']);
    $content = mysqli_real_escape_string($db_server, $_POST['content']);
    $time = mysqli_real_escape_string($db_server, $_POST['time']);

    // SQL запит для вставки новини
    $insert_query = "INSERT INTO last_name_news (tema, zagol, content, time) VALUES ('$tema', '$zagol', '$content', '$time')";
    
    if (mysqli_query($db_server, $insert_query)) {
        echo "<p>Новину успішно додано!</p>";
    } else {
        echo "<p>Помилка додавання новини: " . mysqli_error($db_server) . "</p>";
    }
}

// Закриття з'єднання
mysqli_close($db_server);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Додати Новину</title>
</head>
<body>

<h1>Форма для Додавання Новини</h1>
<form method="post" action="">
    <label for="tema">Тематика:</label><br>
    <input type="text" id="tema" name="tema" required><br><br>
    
    <label for="zagol">Заголовок:</label><br>
    <input type="text" id="zagol" name="zagol" required><br><br>
    
    <label for="content">Контент:</label><br>
    <textarea id="content" name="content" required></textarea><br><br>
    
    <label for="time">Дата та час (формат: YYYY-MM-DD HH:MM:SS):</label><br>
    <input type="text" id="time" name="time" required><br><br>
    
    <input type="submit" value="Додати Новину">
</form>

</body>
</html>
