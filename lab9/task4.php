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

<h1>Новини</h1>

<?php
// Отримання трьох найсвіжіших новин
$fresh_news_query = "SELECT * FROM last_name_news ORDER BY time DESC LIMIT 3";
$fresh_news_result = mysqli_query($db_server, $fresh_news_query);

echo "<h2>Головне</h2>";
if (mysqli_num_rows($fresh_news_result) > 0) {
    echo "<table>";
    echo "<tr>
            <th>Заголовок</th>
            <th>Дата</th>
          </tr>";
    while ($row = mysqli_fetch_assoc($fresh_news_result)) {
        echo "<tr>
                <td><a href='news_detail.php?id={$row['id']}'>{$row['zagol']}</a></td>
                <td>{$row['time']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>Немає новин.</p>";
}

 
$themes_query = "SELECT DISTINCT tema FROM last_name_news";
$themes_result = mysqli_query($db_server, $themes_query);

while ($theme_row = mysqli_fetch_assoc($themes_result)) {
    $theme = $theme_row['tema'];

    // Отримання трьох найсвіжіших новин для кожної теми
    $theme_news_query = "SELECT * FROM last_name_news WHERE tema = '$theme' ORDER BY time DESC LIMIT 3";
    $theme_news_result = mysqli_query($db_server, $theme_news_query);

    if (mysqli_num_rows($theme_news_result) > 0) {
        echo "<h2><a href='theme_news.php?tema=$theme'>$theme</a></h2>";
        echo "<table>";
        echo "<tr>
                <th>Заголовок</th>
                <th>Дата</th>
              </tr>";
        while ($row = mysqli_fetch_assoc($theme_news_result)) {
            echo "<tr>
                    <td><a href='news_detail.php?id={$row['id']}'>{$row['zagol']}</a></td>
                    <td>{$row['time']}</td>
                  </tr>";
        }
        echo "</table>";
    }
}

// Запис загальної кількості новин у файл
$total_news_query = "SELECT COUNT(*) as total FROM last_name_news";
$total_news_result = mysqli_query($db_server, $total_news_query);
$total_news_row = mysqli_fetch_assoc($total_news_result);
$total_count = $total_news_row['total'];

file_put_contents('./file/out.txt', "Загальна кількість новин: $total_count");

 
mysqli_close($db_server);
?>

</body>
</html>
