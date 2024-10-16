<a href='index_lab5.php' class='style_button'>lab 5</a>
<?php
if(!empty($_GET["subdir"]))
{
    echo "<p>Ім'я переданої змінної ".$_GET["subdir"];
    $subdir=$_GET["subdir"];
    echo "subdir=$subdir";
}

else
{
    echo "<p>Змінна 'subdir' не знайдена</p>";
}

$dir = "";
$result = move_uploaded_file($_FILES[ufile][tmp_name], $dir . $_FILES[ufile][name]);

echo "
<div align='center'>
    <form action='task1_1.php?subdir=$subdir' method='post' enctype='multipart/form-data'>
        <input type='file' name='uploadfile'>
        <input type='submit' value='Завантажити'>
    </form>
</div>
<hr>";

$uploaddir = "./files/$subdir";
echo "<p>upload dir = $uploaddir";

$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
echo "<p>upload file = $uploadfile";

if(copy($_FILES['uploadfile']['tmp_name'],$uploadfile))
{
    echo "<p>Файл завантажений на сервер";
}

else
{
    echo "<p>Файл нe завантажений на сервер!";
}

echo "<p>Оригінальна назва: ".$_FILES['uploadfile']['name']."</p>";
echo "<p>Тип файлу: ".$_FILES['uploadfile']['type']."</p>";
echo "<p>Розмір: ".$_FILES['uploadfile']['size']." байт</p>";
echo "<p>Тимчасове ім'я: "  .$_FILES['uploadfile']['tmp_name']."</p>";
?>