<?php
require("../config.php");

class User {
    public $surname;
    public $name;
    public $age;
    public $email;
    
    public function setData($surname, $name, $age, $email) {
        $this->surname = $surname;
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }
    
    public function printData() {
        echo "<p>Прізвище: " . $this->surname . "</p>";
        echo "<p>Ім'я: " . $this->name . "</p>";
        echo "<p>Вік: " . $this->age . "</p>";
        echo "<p>E-mail: " . $this->email . "</p>";
    }
}

if(isset($_POST['submit'])) {
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    
    if(empty($surname) || empty($name) || empty($age) || empty($email)) {
        echo "<p style='color:red;'>Будь ласка, заповніть всі поля.</p>";
    } else {
        $user = new User();
        $user->setData($surname, $name, $age, $email);
        $user->printData();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Форма користувача</title>
</head>
<body>
    <a href='index_lab7.php' class='style_button'>lab 7</a>
	<form method="post">
		<label for="surname">Прізвище:</label>
		<input type="text" id="surname" name="surname"><br><br>
		
		<label for="name">Ім'я:</label>
		<input type="text" id="name" name="name"><br><br>
		
		<label for="age">Вік:</label>
		<input type="text" id="age" name="age"><br><br>
		
		<label for="email">E-mail:</label>
		<input type="email" id="email" name="email"><br><br>
		
		<input type="submit" name="submit" value="ГОТОВО">
	</form>
</body>
</html>
