<!DOCTYPE html>
<html>
<head>
	<title>Example PHP Code with Switch and $_POST</title>
</head>
<body>
<?php require("../config.php"); ?>  
<a href=".index_lab1.php" class="style_button">lab 1</a>
	<h1>What day is it?</h1>
	<form method="POST" action="">
		<input type="text" name="dayOfWeek">
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	// Check if the form was submitted
	if (isset($_POST['submit'])) {
		// Get the value of the input field
		$dayOfWeek = $_POST['dayOfWeek'];

		// Use a switch statement to display a message based on the value of $dayOfWeek
		switch ($dayOfWeek) {
		    case "Monday":
		        echo "It's Monday, the start of the week.";
		        break;
		    case "Tuesday":
		        echo "It's Tuesday, still early in the week.";
		        break;
		    case "Wednesday":
		        echo "It's Wednesday, the week is half over.";
		        break;
		    case "Thursday":
		        echo "It's Thursday, the weekend is almost here.";
		        break;
		    case "Friday":
		        echo "It's Friday, the weekend is finally here!";
		        break;
		    default:
		        echo "It's the weekend, time to relax!";
		}
	}
	?>
</body>
</html>
