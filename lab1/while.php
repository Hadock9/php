<a href="index_lab1.php" class="style_button">lab 1</a>
<?php 
    require("../config.php");
    $i = 0;
    while($i < 10){
        echo "<p>$i Hello</p>";
        $i += 1;
    }

?>