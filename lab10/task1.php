<?php
 
$cookie_name = "user";
$cookie_value = "Vasya";
$cookie_expire = time() + (86400 * 30);  

 
setcookie($cookie_name, $cookie_value, $cookie_expire, "/");  

 
$cookie_array = array("color" => "blue", "size" => "medium", "shape" => "round");

 
foreach ($cookie_array as $key => $value) {
    setcookie($key, $value, $cookie_expire, "/");
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Example</title>
</head>
<body>

<h1>Приклад роботи з cookie в PHP</h1>

<?php
 
if(isset($_COOKIE[$cookie_name])) {
    echo "Значення cookie '$cookie_name': " . $_COOKIE[$cookie_name] . "<br>";
} else {
    echo "Cookie '$cookie_name' не встановлено.<br>";
}

 
echo "Значення масиву cookie:<br>";
foreach ($cookie_array as $key => $value) {
    if (isset($_COOKIE[$key])) {
        echo "$key: " . $_COOKIE[$key] . "<br>";
    } else {
        echo "$key cookie не встановлено.<br>";
    }
}
?>

</body>
</html>
