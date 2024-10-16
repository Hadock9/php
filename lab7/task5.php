<?php
require("../config.php");

class Calculator
{

    private $number;

    function __construct($number = 2)
    {
        $this->number = $number;
    }

    function calculate()
    {
        $table = array();
        for ($i = 1; $i <= 10; $i++) {
            $table[$i] = $this->number * $i;
        }
        return $table;
    }

    function print_table()
    {
        $table = $this->calculate();
        echo "<table style='border: 1px solid black;'>";
        foreach ($table as $index => $value) {
            echo "<tr><td style='border: 1px solid black;'>{$index}</td><td style='border: 1px solid black;'>{$value}</td></tr>";
        }
        echo "</table>";
    }

}

$calculator = new Calculator(3);
$calculator->print_table();
$calculator = new Calculator(12);
$calculator->print_table();
?>
<a href='index_lab7.php' class='style_button'>lab 7</a>