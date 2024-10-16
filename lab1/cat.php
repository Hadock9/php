<!DOCTYPE html>
<html>
<head>
	<title>Concatenate Strings</title>
</head>
<body>

    <?php require("../config.php"); ?>
    <a href="index_lab1.php" class="style_button">lab 1</a>
	<form method="post">
		<label for="first-string">Enter the first string:</label>
		<input type="text" id="first-string" name="firstString"><br><br>

		<label for="second-string">Enter the second string:</label>
		<input type="text" id="second-string" name="secondString"><br><br>

		<input type="submit" value="Concatenate">
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$firstString = $_POST['firstString'];
		$secondString = $_POST['secondString'];

		
		$concatenatedString = $firstString . $secondString;

		
		echo "<p>The concatenated string is: $concatenatedString</p>";
	}
	?>
</body>
</html>
