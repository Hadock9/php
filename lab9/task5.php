<?php
require("../config.php");
require("../db.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новини</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>

<?php
 

// Видалення новини з порядковим номером 5
$delete_query = "DELETE FROM last_name_news WHERE id = 5";
if (mysqli_query($db_server, $delete_query)) {
    echo "<p>Новина з порядковим номером 5 успішно видалена.</p>";
} else {
    echo "<p>Помилка видалення новини: " . mysqli_error($db_server) . "</p>";
}

// Запит для вибору всіх записів  окрім поля з контентом
$select_query = "SELECT id, tema, zagol, time FROM last_name_news";
$result = mysqli_query($db_server, $select_query);

if (mysqli_num_rows($result) > 0) {
    // Виведення таблиці з даними
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Тематика</th>
                <th>Заголовок</th>
                <th>Дата</th>
            </tr>";
    // Виведення кожного рядка
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["tema"] . "</td>
                <td>" . $row["zagol"] . "</td>
                <td>" . $row["time"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>Немає новин для відображення.</p>";
}

 
mysqli_close($db_server);
?>

</body>
</html>
