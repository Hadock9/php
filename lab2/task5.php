<?php
    require("../config.php");
	$trees = array("дуб", "береза", "тополя", "ялинка", "сосна", "яворина");
    $random_trees = array_rand($trees, 4);
    $correct = $trees[$random_trees[array_rand($random_trees)]];
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <a href="index_lab2.php" class="style_button">lab 2</a>
    <?php
	    echo "<h1>Виберіть зображення " . $correct . "</h1>"
    ?>
	<form action="check2.php" method="post">
        <?php
        foreach($random_trees as $tree_key){
            $tree_name = $trees[$tree_key];
            
            echo '<p>
                    <label>
                        <input type="radio" name="image" value="' . $tree_name .'">
                        <img src="tree' . $tree_key + 1 . '.jpg" alt="' . $tree_name . '">
                    </label>
                </p>';
        }
        ?>
		<?php 
            echo '<input type="hidden" name="correct" value="'. $correct .'">';
        ?>
		<p>
			<button type="submit">Перевірити</button>
		</p>
	</form>
</body>

<style>
	img{
		width: 100px;
	}
</style>

</html>
