<a href="index_lab3.php" class="style_button">lab 3</a>
<?php
    require("../config.php");

    $rand = rand(1, 6);

    echo '<a href="task7.php?n=' . $rand . '">task-7</a><br>';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $n = $_GET['n'];
        switch ($n) {
            case 1:
                echo "Викликати функцію func1";
                break;
            case 2:
                echo "Викликати функцію func2";
                break;
            case 3:
                echo "Викликати функцію func3";
                break;
            default:
                echo "Некоректні дані";
                break;
        }
    }
?>

