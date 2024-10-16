<?php
require("../config.php");
?>

<html>

<body>
    <h1> Використання циклу foreach </h1>
    <a href="index_lab4.php" class="style_button">lab 4</a>
    <?php
    $names["Бойчук"] = "Іван";
    $names["Мельник"] = "Борис";
    $names["Швець"] = "Антон";
    foreach ($names as $key => $value) {
        echo "<b>$value $key</b><br>";
    }
    ?>
</body>

</html>