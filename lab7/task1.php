<?php
require("../config.php");

class Student {
    public $name;
    public $surname;
    public $group;
  }

  $student1 = new Student();
  $student1->name = "John";
  $student1->surname = "Doe";
  $student1->group = "A1";
  
  echo "Name: " . $student1->name . "<br>";
  echo "Surname: " . $student1->surname . "<br>";
  echo "Group: " . $student1->group . "<br>";


  $student2 = new Student();
  $student2->name = "Vasya";
  $student2->surname = "Falyovskij";
  $student2->group = "IPZ-23";
  
  echo "Name: " . $student2->name . "<br>";
  echo "Surname: " . $student2->surname . "<br>";
  echo "Group: " . $student2->group . "<br>";


  $student1 = new Student();
  $student1->name = "Petro";
  $student1->surname = "Poroshenko";
  $student1->group = "ZePartia";
  
  echo "Name: " . $student1->name . "<br>";
  echo "Surname: " . $student1->surname . "<br>";
  echo "Group: " . $student1->group . "<br>";
?>
<a href='index_lab7.php' class='style_button'>lab 7</a>