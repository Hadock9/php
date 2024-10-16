<a href="index_lab4.php" class="style_button">lab 4</a>
<?php 
require("../config.php");
echo "<h1>Task 5.1</h1>";
$desserts = array(
    array("name"=>"Cake", "price"=>3.5, "calories"=>300),
    array("name"=>"Ice cream", "price"=>2.0, "calories"=>200),
    array("name"=>"Cheesecake", "price"=>4.0, "calories"=>400),
    array("name"=>"Chocolate", "price"=>2.5, "calories"=>250),
    array("name"=>"Fruit salad", "price"=>3.0, "calories"=>150)
);

$max_price = 0;
$max_calories = 0;
$max_price_name = "";
$max_calories_name = "";

foreach ($desserts as $dessert) {
    echo $dessert["name"] . ": " . $dessert["price"] . "$, " . $dessert["calories"] . "Cal<br>"; 
    if ($dessert["price"] > $max_price) {
        $max_price = $dessert["price"];
        $max_price_name = $dessert["name"];
    }
    if ($dessert["calories"] > $max_calories) {
        $max_calories = $dessert["calories"];
        $max_calories_name = $dessert["name"];
    }
}

if ($max_price_name == $max_calories_name) {
    echo "The most expensive dessert is also the most caloric one: " . $max_price_name . ".";
} else {
    echo "The most expensive dessert is not the most caloric one. The most expensive dessert is " . $max_price_name . " and the most caloric one is " . $max_calories_name . ".";
}









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
