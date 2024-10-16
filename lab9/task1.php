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
    <title>Створення таблиці новин</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Створення таблиці last_name_news</h1>
    <pre>
        <?php
        
         
			if (!mysqli_query($db_server, "DROP TABLE IF EXISTS last_name_news")) {
					echo "Помилка при видаленні таблиці: " . mysqli_error($db_server) . "<br>";
			}
			
			// Створення таблиці
			$query = "
			CREATE TABLE last_name_news (
					id INT AUTO_INCREMENT PRIMARY KEY,
					tema VARCHAR(100),
					zagol VARCHAR(255),
					content TEXT,
					time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
			)";
			
			if (mysqli_query($db_server, $query)) {
					echo "Таблиця last_name_news успішно створена.";
			} else {
					echo "Помилка створення таблиці: " . mysqli_error($db_server);
			}
			
		 
			mysqli_close($db_server);
        ?>
    </pre>
</body>
</html>
