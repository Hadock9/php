<?php
require("../config.php");
?>
<a href="index_lab4.php" class="style_button">lab 4</a>
<?php
$countries = array(
    "Germany" => array("name" => "Німеччина", "capital" => "Берлін", "population" => "83.1"),
    "France" => array("name" => "Франція", "capital" => "Париж", "population" => "66.99"),
    "Japan" => array("name" => "Японія", "capital" => "Токіо", "population" => "125.41"),
    "Brazil" => array("name" => "Бразилія", "capital" => "Бразиліа", "population" => "213.99"),
    "Canada" => array("name" => "Канада", "capital" => "Оттава", "population" => "38.01")
);

echo "<table border=1 style='border-collapse:collapse'>";

echo "<tr><td>Назва країни</td><td>Назва столиці країни</td><td>Кількість населення (мільйони чол.)</td></tr>";
foreach ($countries as $key => $value) {
    echo "<tr><td>" . $value['name'] . "</td><td>" . $value['capital'] . "</td><td>" . $value['population'] . "</td></tr>";
}

echo "</table>";

$count = 1;
foreach ($countries as $key => $value) {
    echo "<br>Столицею держави " . $value['name'] . " є місто " . $value['capital'] . ", її населення складає " . $value['population'] . " мільйонів чол.<br>";
    if($count == 3){
        break;
    }
    $count += 1;
}

echo " <br><br><br><br> ";

foreach ($countries as $key1 => $value1) {
    echo $key1 . ":<br>";
    ksort($value1);
    foreach ($value1 as $key2 => $value2) {
        echo $key2 . "=>" . $value2 . "<br><br>";
    }
}

print_r($countries);

?>
<style>
    td{
        padding: 5px;
    }
</style>