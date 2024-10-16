<?php
    require("../config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Результати</title>
</head>
<body>
	
	<?php
		// перевірка, чи була надіслана форма
		if (isset($_POST['image'])) {
			// отримання значення відповіді з форми
			$selectedImage = $_POST['image'];
			$tree_int = $_POST['correct'];


			// перевірка правильності відповіді
			if ($selectedImage == strval($tree_int)) {
				echo '<p>Відповідь вірна!</p>';
			} else {
				echo '<p>Відповідь невірна!</p>';
			}
		} else {
			echo '<p>Ви не вибрали жодного зображення.</p>';
		}
	?>
	<p><a href="index_lab2.php" class="style_button">lab 2</a></p>
</body>
</html>