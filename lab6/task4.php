<a href='index_lab6.php' class='style_button'>lab 6</a>
<?php
require("../config.php");
?>
<html>

<body>

    <form action="task4.php" method="post">
        <label for="name">Ім'я:</label>
        <input type="text" id="name" name="name" required>
        <img src="galka.png" id="name" alt="">
        <br>

        <label for="surname">Прізвище:</label>
        <input type="text" id="surname" name="surname" required>
        <img src="galka.png" id="surname" alt="">
        <br>

        <label for="login">Логін:</label>
        <input type="text" id="login" name="login" required>
        <img src="galka.png" id="login" alt="">
        <br>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        <img src="galka.png" id="password" alt="">
        <br>

        <label for="confirm_password">Повторіть пароль:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <img src="galka.png" id="confirm_password" alt="">
        <br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <img src="galka.png" id="email" alt="">
        <br>

        <button type="submit">Підтвердити</button>
    </form>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    img{
        width: 30px;
        display: none;
    }
</style>

</html>

<?php


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $email = $_POST["email"];

    if (!preg_match("/^[A-Z][a-z]*$|^[А-ЯІЇ][а-яії]*$/", $name)) {
        $id = "name";
        echo "Недійсний формат імені. Повинні бути тільки літери і перша літера велика<br>";
        echo "  <style>
                    #$id{border: red solid 2px;}
                </style>";
    }
    else{
        $id = "name";
        echo "  <style>
                    #$id{border: black solid 1px; display: inline;}
                </style>";
    }

    if (!preg_match("/^[A-Z][a-z]*$|^[А-ЯІЇ][а-яії]*$/", $surname)) {
        echo "Недійсний формат фамілії. Повинні бути тільки літери і перша літера велика.<br>";
        $id = "surname";
        echo "Недійсний формат імені. Повинні бути тільки літери і перша літера велика<br>";
        echo "  <style>
                    #$id{border: red solid 2px;}
                </style>";
    }
    else{
        $id = "surname";
        echo "  <style>
                    #$id{border: black solid 1px; display: inline;}
                </style>";
    }

    if (!preg_match("/^[a-z]+$/", $login)) {
        echo "Недійсний формат логіну. Допускаються лише малі латинські літери.<br>";
        $id = "login";
        echo "Недійсний формат імені. Повинні бути тільки літери і перша літера велика<br>";
        echo "  <style>
                    #$id{border: red solid 2px;}
                </style>";
    }
    else{
        $id = "login";
        echo "  <style>
                    #$id{border: black solid 1px; display: inline;}
                </style>";
    }
    

    if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/", $password)) {
        echo "Недійсний формат пароля. Пароль має містити принаймні одну літеру та одну цифру і бути довший 6-ти символів.<br>";
        $id = "password";
        echo "Недійсний формат імені. Повинні бути тільки літери і перша літера велика<br>";
        echo "  <style>
                    #$id{border: red solid 2px;}
                </style>";
    }
    else{
        $id = "password";
        echo "  <style>
                    #$id{border: black solid 1px; display: inline;}
                </style>";
    }

    if ($password != $confirm_password) {
        echo "Паролі не співпадають.<br>";
        $id = "confirm_password";
        echo "Недійсний формат імені. Повинні бути тільки літери і перша літера велика<br>";
        echo "  <style>
                    #$id{border: red solid 2px;}
                </style>";
    }
    else{
        $id = "confirm_password";
        echo "  <style>
                    #$id{border: black solid 1px; display: inline;}
                </style>";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Недійсний формат email.<br>";
        $id = "email";
        echo "Недійсний формат імені. Повинні бути тільки літери і перша літера велика<br>";
        echo "  <style>
                    #$id{border: red solid 2px;}
                </style>";
    }
    else{
        $id = "email";
        echo "  <style>
                    #$id{border: black solid 1px; display: inline;}
                </style>";
    }
}
?>