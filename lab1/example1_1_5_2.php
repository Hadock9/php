<?php

require("index_lab1.php");
 
?>
<html>

<head>
    <title>Приклад форми get</title>
</head>

<body>
    <a href="../index.php" class="style_button">lab 1</a>
    <?php
    $variable = $_GET['formvariable'];
    echo "<div><b>Число додане до поточного файлу методом get:" . $variable . "</div></b>";
    $variableFromEx1_1_5_1 = $_GET['formvariableGet'];
    echo "<br>";
    echo "<div><b>Значення змінної передане з файлу example1_1_5_1.php, помножене на 2 рівне " . ($variableFromEx1_1_5_1 * 2) . "</div></b>";
    ?>
    <div>
        <form action="example1_1_5_2.php" method="get">
            <input type="text" name="formvariable">
            <input type="submit" value="Додати">
        </form>
        <div>
             
</body>

</html>