<?php
require("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex. 1</title>
</head>
<body>
    <a href="index_lab5.php" class="style_button">lab 5</a>
<?php 

echo "<h2>Приклад 1</h2>";

$file = "files/sometext.txt"; 
infoFile($file);
function infoFile($f){
    if(!file_exists($f)){ 
        echo "$f не знайдений!"; 
        return; 
    }
    echo "$f - ".(is_file($f) ? "" : "не ")."файл<br>"; 
    echo "$f - ".(is_dir($f) ? "" : "не ")."каталог<br>"; 
    echo "$f ".(is_readable($f) ? "" : "не ")."доступний для читання<br>";
    echo "$f ".(is_writable($f) ? "" : "не ")."доступний для запису<br>";
    echo "размір $f в байтах - ".(filesize($f))."<br>"; 
    echo "остання зміна $f - ".(date("d MYH:i", filemtime($f)))."<br>"; 
    echo "останнє звернення до $f - ".(date("d MYH:i", fileatime($f)))."<br>"; 
}


echo "<h2>Приклад 2</h2>";


$fp = fopen("files/sometext.txt", "r") or die("Не вдалося відкрити файл!");
while(!feof($fp)) {
    echo fgets($fp, 1024)."<br>";
}
fclose($fp);


echo "<h2>Приклад 3</h2>";


$f = "files/sometext.txt";
$fp = fopen($f, "r") or die("Не вдалося відкрити $f");
$fsize = filesize($f);
$half = (int)($fsize / 2);
fseek($fp, $half); 
echo fread($fp, ($fsize - $half));
fclose($fp);


echo "<h2>Приклад 4</h2>";


$res =  include 'task1_2_example.php'; 
echo "<p> Включений файл повернув $res<p>"; 


echo "<h2>Приклад 5</h2>";

if ($_FILES["fileToUpload"]["name"]) {
   
    $targetDir = "/files";
  
    $fileName = basename($_FILES["fileToUpload"]["name"]);
  
    $targetFilePath = $targetDir . $fileName;
  
    if (file_exists($targetFilePath)) {
      echo "Уупс, такий файл уже створений.";
      exit();
    }
  
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {
      echo "Файл " . $fileName . " завантажено.";
    } else {
      echo "Уупс, сталася помилка завантаження файлу.";
    }
  }

?> 

<form action="task1.php" method="post" enctype="multipart/form-data">
  Виберіть файл, щоб завантажити    :
  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  <input type="submit" value="Завантажити" name="submit">
</form>

    
</body>
</html>