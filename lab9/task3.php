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

<h1>Додавання та перегляд новин</h1>

<?php
 
 
$current_year = date('Y');
$themes_query = "SELECT DISTINCT tema FROM last_name_news";
$themes_result = mysqli_query($db_server, $themes_query);

while ($theme_row = mysqli_fetch_assoc($themes_result)) {
    $theme = $theme_row['tema'];

    
    $check_query = "SELECT COUNT(*) as count FROM last_name_news WHERE tema = '$theme' AND YEAR(time) = '$current_year'";
    $check_result = mysqli_query($db_server, $check_query);
    $check_row = mysqli_fetch_assoc($check_result);

    if ($check_row['count'] == 0) {
        // Вставка новини  
        $zagol = "Нова новина в темі $theme за $current_year";
        $content = "Текст новини в темі $theme.";
        $time = date('Y-m-d H:i:s'); // Поточна дата і час
        $insert_query = "INSERT INTO last_name_news (tema, zagol, content, time) VALUES ('$theme', '$zagol', '$content', '$time')";
        mysqli_query($db_server, $insert_query);
    }
}

$select_query = "SELECT * FROM last_name_news ORDER BY time DESC";
$select_result = mysqli_query($db_server, $select_query);

echo "<table>";
echo "<tr>
        <th>ID</th>
        <th>Тема</th>
        <th>Заголовок</th>
        <th>Дата</th>
      </tr>";

while ($row = mysqli_fetch_assoc($select_result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['tema']}</td>
            <td>{$row['zagol']}</td>
            <td>{$row['time']}</td>
          </tr>";
}

echo "</table>";

mysqli_close($db_server);
?>

</body>
</html>
