<?php 
    require("../config.php");
?>
<a href="index_lab4.php" class="style_button">lab 4</a>
<?php 
    $my_topic = array(
        2 => "дуб",
        3 => "береза",
        4 => "тополя",
        5 => "ялинка",
        6 => "яворина"
    );
    echo "<h3>My array</h3>";
    foreach ($my_topic as $index => $element) {
        echo "Індекс:<b> $index</b>, значення: <b> $element </b> <br><br>";
    }

    $flipped_arr = array_flip($my_topic);

    echo "<h3>My flipped array</h3>";
    foreach($flipped_arr as $index => $element){
        echo "Індекс: <b>$index</b>, значення:<b> $element </b><br><br>";
    }
?>