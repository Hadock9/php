<?php
require("../config.php");
?>
<a href="index_lab4.php" class="style_button">lab 4</a>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST['surname']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirm_password'])) {
        echo 'Будь ласка, заповніть всі поля форми.';
    } else {
        if ($_POST['password'] !== $_POST['confirm_password']) {
            echo 'Паролі не співпадають. Будь ласка, спробуйте знову.';
        } else {

            $user_data = array(
                'Прізвище' => $_POST['surname'],
                'Ім\'я' => $_POST['name'],
                'E-mail' => $_POST['email'],
                'Пароль' => $_POST['password']
            );

            echo "<table border=1 style='border-collapse:collapse'>";
            foreach ($user_data as $key => $value) {
                echo '<tr>';
                echo '<td>' . $key . '</td>';
                echo '<td>' . $value . '</td>';
                echo '</tr>';
            }
            echo '</table> <br><br><br><br>';
        }
    }
}


?>

<form method="post">
    <label for="surname">Прізвище:</label>
    <input type="text" name="surname" id="surname">
    <br>
    <label for="name">Ім'я:</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email">
    <br>
    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password">
    <br>
    <label for="confirm_password">Підтвердження паролю:</label>
    <input type="password" name="confirm_password" id="confirm_password">
    <br>
    <input type="submit" value="Готово">
</form>