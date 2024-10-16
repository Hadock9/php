<?php
    require("../config.php");

    echo "<a href='index_lab5.php' class='style_button'>lab 5</a>
<form method='post'>
    <label for='filename'>Введіть ім'я файлу:</label>
    <input type='text' name='filename' id='filename' placeholder='lab5_Falovskij.php'>
    <button type='submit' name='submit'>Готово</button>
</form>
<hr>

";

    if (isset($_POST['submit']))
    {
        if (substr($_POST['filename'], -strlen(".php")) === ".php")
        {
            $f = "./".$_POST['filename'];
        }
        else {
            $f = "./files/".$_POST['filename'];
        }

        if(!file_exists($f))
        {
            echo "Файл з іменем ".basename($f)." у поточному каталозі не існує"; 
            return;
        }

        else
        {
            $size = filesize($f);
            $creation_time = date("F d Y H:i:s", filectime($f));
            $modification_time = date("F d Y H:i:s", filemtime($f));
            $contents = "";

            echo "Знайдено файл ".basename($f)."!";
            echo "<table border='1'>";
            echo "<tr>
                <th>Ім'я файлу</th>
                <th>Розмір</th>
                <th>Дата створення</th>
                <th>Дата зміни</th>
            </tr>";
            echo "
            <tr>
                <td>".basename($f)."</td>
                <td>$size</td>
                <td>$creation_time</td>
                <td>$modification_time</td>
            </tr>";
            echo "
            <tr>
                <td colspan='4'>".file_get_contents($f)."</td>
            </tr>";
            echo "</table>";
        }
    }
     
?>