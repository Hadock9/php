<!DOCTYPE html>
<html>
<head>
	<title>Add Numbers</title>
</head>
<body>
    <?php require("../config.php"); ?>  
    <a href="index_lab1.php" class="style_button">lab 1</a>
	<form method="post">
		<label for="first-number">Enter the first value:</label>
		<input type="text" id="first-number" name="firstNumber"><br><br>

		<label for="second-number">Enter the second value:</label>
		<input type="text" id="second-number" name="secondNumber"><br><br>

		<input type="submit" value="Is equal?">
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$firstNumber = $_POST['firstNumber'];
		$secondNumber = $_POST['secondNumber'];

		$eq = $firstNumber == ($secondNumber);
		if($eq){
            echo "Equal";
        }
        else{
            echo "Not equal";
        }

	}
	?>
</body>
</html>
