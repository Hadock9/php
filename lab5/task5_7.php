<a href='index_lab5.php' class='style_button'>lab 5</a>
<?php
    $paragraphs = array("files/p1.txt", "files/p2.txt", "files/p3.txt", "files/p4.txt", "files/p5.txt");
    $random_index = rand(0, 4);

    $text = file_get_contents($paragraphs[$random_index]);

    echo "<p>$text</p>";
?>
