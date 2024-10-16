<?php
require("../config.php");

class Student
{
    public $name;
    public $surname;
    public $group;

    function __construct($name = "def name", $surname = "def surname", $group = "def group")
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->group = $group;
    }
    public function getInfo()
    {
        echo $this->name . ' ' . $this->surname . ' ' . $this->group . '<br>';
    }

    public function __clone()
    {
        $value = $this->name;
        unset($this->name); 
        $this->name = $value;
        $value = $this->surname;
        unset($this->surname); 
        $this->surname = $value;
        $value = $this->group;
        unset($this->group); 
        $this->group = $value;
    }
}
$student1 = new Student();
$student1->name = "John";
$student1->surname = "Die";
$student1->group = "A1";
$student1->getInfo();


$student2 = new Student();
$student2->name = "Vasya";
$student2->surname = "Falyovskij";
$student2->group = "IPZ-23";
$student2->getInfo();


$student3 = new Student();
$student3->name = "Petro";
$student3->surname = "Zelenskij";
$student3->group = "ZePartia";
$student3->getInfo();

$student4 = new Student();
$student4->getInfo();

$student5 = new Student("Mykola", "Hola", "IPS");
$student5->getInfo();

$student6 = new Student("Hello", "World", "C++");
$student6->getInfo();

$student7 = clone $student1;
$student7->getInfo();

?>
<a href='index_lab7.php' class='style_button'>lab 7</a>