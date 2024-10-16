<a href="index_lab4.php" class="style_button">lab 4</a>
<?php
    require("../config.php");
    $pow2_arr = array();
    $pow3_arr = array();

    for($i = 10; $i <= 20; $i++){
        $pow2_arr[] = ($i ** 2);
    }

    for($i = 1; $i <= 10; $i++){
        $pow3_arr[] = ($i ** 3);
    }

    echo "<h3> Array of squares </h3>";
    foreach($pow2_arr as $t){
        echo $t . " ";
    }
    echo "<br>";
    
    echo "<h3> Array of cubes </h3>";
    foreach($pow3_arr as $t){
        echo $t . " ";
    }
    echo "<br>";

    $merged_array = array_merge($pow2_arr, $pow3_arr);

    echo "<h3> Merged array </h3>";
    foreach($merged_array as $t){
        echo $t . " ";
    }
    echo "<br>";

?>