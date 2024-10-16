<?php
require("../config.php");

class Country {
    public $name;
    public $population;
    public $capital;
    
    public function __construct($name, $population, $capital) {
        $this->name = $name;
        $this->population = $population;
        $this->capital = $capital;
    }
}

$countries = array(
    new Country("Vietnam", 96208984, "Hanoi"),
    new Country("Venezuela", 28435943, "Caracas"),
    new Country("Vanuatu", 307145, "Port Vila"),
    new Country("Vatican City", 825, "Vatican City"),
);

echo "<table>";
foreach ($countries as $country) {
    echo "<tr>";
    echo "<td>Name</td><td>{$country->name}</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Population</td><td>{$country->population}</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Capital</td><td>{$country->capital}</td>";
    echo "</tr>";
}
echo "</table>";
?>
<html>
    <style>
        td, table{
            border: 1px solid black;
        }
    </style>
    <a href='index_lab7.php' class='style_button'>lab 7</a>
</html>