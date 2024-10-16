<!DOCTYPE html>
<html>

<head>
    <title>Температура</title>
</head>

<body>
    <?php require("../config.php"); ?>
    <a href="index_lab1.php" class="style_button">lab 1</a>
    <h1>Обчислення температури</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Температура 1:</label>
        <input type="number" name="temp1" required><br><br>

        <label>Температура 2:</label>
        <input type="number" name="temp2" required><br><br>

        <label>Температура 3:</label>
        <input type="number" name="temp3" required><br><br>

        <label>Номер завдання:</label>
        <select name="task">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br><br>
        <input type="submit" name="submit" value="Обчислити"><br><br>
    </form>
    <?php

    $temp1 = $_POST['temp1'];
    $temp2 = $_POST['temp2'];
    $temp3 = $_POST['temp3'];
    $task = $_POST['task'];

    switch ($task) {
        case 1:
            $max_temp = max($temp1, $temp2, $temp3);
            echo "Максимальна температура: " . $max_temp . " градусів";
            break;
        case 2:
            $min_temp = min($temp1, $temp2, $temp3);
            echo "Мінімальна температура: " . $min_temp . " градусів";
            break;
        case 3:
            $avg_temp = ($temp1 + $temp2 + $temp3) / 3;
            echo "Середня температура: " . $avg_temp . " градусів";
            break;
        default:
            echo "Невірно введено номер завдання";
    }

    ?>
</body>

</html>