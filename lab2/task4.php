<?php
    require("../config.php");
	$tree_int = rand(1, 4);
	$tree_str;
	if($tree_int == 1){
		$tree_str = "дуб";
	}
	if($tree_int == 2){
		$tree_str = "береза";
	}
	if($tree_int == 3){
		$tree_str = "тополя";
	}
	if($tree_int == 4){
		$tree_str = "ялинка";
	}
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<a href="index_lab2.php" class="style_button">lab 2</a>
    <?php
	echo "<h1>Виберіть зображення " . $tree_str . "</h1>"
    ?>
	<form action="check.php" method="post">
		<p>
			<label>
				<input type="radio" name="image" value="1">
				<img src="tree1.jpg" alt="дуб">
			</label>
		</p>
		<p>
			<label>
				<input type="radio" name="image" value="2">
				<img src="tree2.jpg" alt="береза">
			</label>
		</p>
		<p>
			<label>
				<input type="radio" name="image" value="3">
				<img src="tree3.jpg" alt="тополя">
			</label>
		</p>
		<p>
			<label>
				<input type="radio" name="image" value="4">
				<img src="tree4.jpg" alt="ялинка">
			</label>
		</p>
		<?php 
			echo '<input type="hidden" name="correct" value="'. $tree_int .' ">'
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
