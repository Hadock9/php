<a href="index_lab4.php" class="style_button">lab 4</a>
<?php 
require("../config.php");
echo "<h1>Task 5.1</h1>";
 
echo "<h1>Інформація про авторів</h1>";

 
$authors = array(
    array("lastName" => "Шевченко", "firstName" => "Тарас", "booksCount" => 3),
    array("lastName" => "Franko", "firstName" => "Іван", "booksCount" => 5),
    array("lastName" => "Коцюбинський", "firstName" => "Михайло", "booksCount" => 2),
    array("lastName" => "Нечуй-Левицький", "firstName" => "Іван", "booksCount" => 4),
    array("lastName" => "Лесі Українки", "firstName" => "Леся", "booksCount" => 1)
);

 
echo "<table border='1'>";
echo "<tr><th>Прізвище</th><th>Ім'я</th><th>Кількість книг</th></tr>";
foreach ($authors as $author) {
    echo "<tr>";
    echo "<td>" . $author["lastName"] . "</td>";
    echo "<td>" . $author["firstName"] . "</td>";
    echo "<td>" . $author["booksCount"] . "</td>";
    echo "</tr>";
}
echo "</table>";

 
$countMoreThanTwoBooks = 0;
foreach ($authors as $author) {
    if ($author["booksCount"] > 2) {
        $countMoreThanTwoBooks++;
    }
}
echo "<p>Кількість авторів, які опублікували більше двох книг: $countMoreThanTwoBooks</p>";
 








echo "<h1>Task 5.2</h1>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Міста та населення</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
		}
		td {
			border: 1px solid black;
			padding: 5px;
		}
		.blue {
			background-color: blue;
			color: white;
		}
	</style>
</head>
<body>
	<?php
		$regions = array(
			"Івано-Франківська область" => array(
				"Коломия" => 101837,
				"Тисмениця" => 7962,
				"Косів" => 43777
			),
			"Київська область" => array(
				"Київ" => 2950513,
				"Біла Церква" => 202600,
				"Українка" => 11369
			),
			"Львівська область" => array(
				"Львів" => 724303,
				"Дрогобич" => 76685,
				"Самбір" => 34767
			)
		);
        
		$maxGlobalPopulation = 0;
		foreach ($regions as $region => $cities) {
			$regionPopulation = 0;
			echo "<h2>$region</h2>";
			echo "<table>";
			echo "<tr><th>Місто</th><th>Населення</th></tr>";
            $maxRegionPopulation = 0;
			foreach ($cities as $city => $population) {
				$regionPopulation += $population;
				if ($population > $maxGlobalPopulation) {
					$maxGlobalPopulation = $population;
					$maxCity = $city;
				}
                if($population > $maxRegionPopulation){
                    $maxRegionPopulation = $population;
                }
				echo "<tr>";
				echo "<td" . ($population == $maxRegionPopulation ? " class=\"blue\"" : "") . ">$city</td>";
				echo "<td" . ($population == $maxRegionPopulation ? " class=\"blue\"" : "") . ">$population</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "<p>Загальна кількість мешканців у $region: $regionPopulation</p>";
		}
		echo "<p>Максимальна кількість мешканців у місті $maxCity: $maxGlobalPopulation</p>";
	?>
</body>
</html>
