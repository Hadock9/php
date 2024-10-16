<?php
require("../config.php");
require("../db.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Реєстрація Користувача</title>
</head>
<body>
	<a href="./index_lab8.php" class="style_button">LAB 8</a>
    <h1>Форма Реєстрації</h1>
    <form method="POST" action="">
        <label for="login">Логін:</label>
        <input type="text" name="login" required><br>

        <label for="password">Пароль:</label>
        <input type="password" name="password" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="first_name">Ім'я:</label>
        <input type="text" name="first_name" required><br>

        <label for="last_name">Прізвище:</label>
        <input type="text" name="last_name" required><br>

        <input type="submit" value="Зареєструватися">
    </form>
		<?php 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			 
			$login = $_POST['login'];
			$password = $_POST['password'];  
			$email = $_POST['email'];
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
	
		 
			$sql = "INSERT INTO users (login, password, email, first_name, last_name) VALUES (?, ?, ?, ?, ?)";
			
			$stmt = $db_server->prepare($sql);
			$stmt->bind_param("sssss", $login, $password, $email, $first_name, $last_name);
			
			if ($stmt->execute()) {
					echo "<p>Користувача успішно зареєстровано!</p>";
			} else {
					echo "<p>Помилка: " . $stmt->error . "</p>";
			}
	}
	
	 
	$sql = "SELECT login, password, email, first_name, last_name FROM users";
	$result = $db_server->query($sql);
	
	if ($result) {
			echo "<h2>Список Користувачів</h2>";
			echo "<table border='1'>
							<tr>
									<th>Логін</th>
									<th>Пароль</th>
									<th>Email</th>
									<th>Ім'я</th>
									<th>Прізвище</th>
								 
							</tr>";
	
			while ($row = $result->fetch_assoc()) {
					echo "<tr>
									<td>" . htmlspecialchars($row['login']) . "</td>
									<td>" . htmlspecialchars($row['password']) . "</td>
									<td>" . htmlspecialchars($row['email']) . "</td>
									<td>" . htmlspecialchars($row['first_name']) . "</td>
									<td>" . htmlspecialchars($row['last_name']) . "</td>
								
								</tr>";
			}
	
			echo "</table>";
	} else {
			echo "<p>Помилка при отриманні користувачів: " . $db_server->error . "</p>";
	}
	
	$db_server->close();
		?>
</body>
</html>
