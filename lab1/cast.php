<!DOCTYPE html>
<html>
<head>
	<title>Add Numbers</title>
</head>
<body>
	<a href="index_lab1.php" class="style_button">lab 1</a>
    <?php require("../config.php"); ?>  
	<form method="post">
		<label for="first-number">Enter the first number:</label>
		<input type="text" id="first-number" name="firstNumber"><br><br>

		<label for="second-number">Enter the second number:</label>
		<input type="text" id="second-number" name="secondNumber"><br><br>

		<input type="submit" value="Add">
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$firstNumber = (int)$_POST['firstNumber'];
		$secondNumber = (int)$_POST['secondNumber'];

		$sum = $firstNumber + $secondNumber;
		echo "<p>The sum of $firstNumber and $secondNumber is: $sum</p>";
	}
	?>
</body>
</html>
