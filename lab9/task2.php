<?php
require("../config.php");
require("../db.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Додавання новин</title>
</head>
<body>

<h1>Додавання новин з файлу</h1>

<form method="post" action="">
    <input type="submit" value="Завантажити новини з файлу">
</form>

<?php
 

 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $file = "file/news.txt";
    $fdata_my = fopen($file, "r") or die("Не вдалося відкрити файл $file!");

     
    $mas = fread($fdata_my, filesize($file));
    fclose($fdata_my);

     
    $mas = explode("&", $mas);

     
    foreach ($mas as $record) {
       
        $mas_vidm = explode("~", $record);

       
        if (count($mas_vidm) == 4) {
            $tema = mysqli_real_escape_string($db_server, $mas_vidm[0]);
            $zagol = mysqli_real_escape_string($db_server, $mas_vidm[1]);
            $content = mysqli_real_escape_string($db_server, $mas_vidm[2]);
            $time = mysqli_real_escape_string($db_server, trim($mas_vidm[3]));  

           
            $dateTime = DateTime::createFromFormat('Y-m-d H:i:s', $time);
            if ($dateTime === false) {
                echo "<p class='error'>Неправильний формат дати для запису: $record<br></p>";
                continue;  
            }

           
            $res = mysqli_query($db_server, "INSERT INTO last_name_news (tema, zagol, content, time) VALUES ('$tema', '$zagol', '$content', '$time')");

            if (!$res) {
                echo "<p class='error'>Помилка вставки: " . mysqli_error($db_server) . "<br></p>";
            }
        } else {
            echo "<p class='error'>Неправильна кількість полів у записі: $record<br></p>";
        }
    }

    echo "<p class='message'>Дані успішно додані в таблицю last_name_news.</p>";
}

 
mysqli_close($db_server);
?>

</body>
</html>
