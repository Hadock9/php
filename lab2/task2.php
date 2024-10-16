<?php 
    require("../config.php")
?>

<html>
<a href="index_lab2.php" class="style_button">lab 2</a>
    <form action="task2.php" method="post">
        <label for="x">Print x: </label>
        <input name="x" type="text">
        <label for="y">Print y: </label>
        <input name="y" type="text">

        <button type="submit">Submit</button>
    </form>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];

    if (ctype_digit($x) && ctype_digit($y)) {
        $x = intval($x);
        $y = intval($y);
        if($x > 0 || $y > 0){
            echo "<p>" . $x + sqrt($y) ."</p>";
        }
        else{
            echo "<b>The numbers are not naturals!!!</b>";
        }

    } else {
        echo "The values are not integer numbers";
    }
?>