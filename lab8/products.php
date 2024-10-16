<?php
require("../config.php");
require("../db.php");

 
$sql = "SELECT * FROM sklad";
$result = $db_server->query($sql);

 
?>

<!DOCTYPE html>
<html lang='uk'>
<head>
    <meta charset='UTF-8'>
    <title>Склад Товарів</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
		<a href="./index_lab8.php" class="style_button">LAB 8</a>
    <h1>Список Товарів</h1>
    <div class='products-container'>
        <?php
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>
                        <h3><a href='product.php?id=" . $row['id'] . "'>" . htmlspecialchars($row['name']) . "</a></h3>
                        <img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "' width='150'>
                        <p>Ціна: " . htmlspecialchars($row['price']) . " грн</p>
                        <p>Наявна кількість: " . htmlspecialchars($row['quantity']) . "</p>
                      </div>";
            }
        } else {
            echo "<p>Помилка при отриманні товарів: " . $db_server->error . "</p>";
        }

        $db_server->close();
        ?>
    </div>
</body>
</html>
