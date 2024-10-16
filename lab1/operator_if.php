<?php
require("../config.php");
//include_once("../db.php");
 
 
?>
<html>
<head>
<title>Приклад операторів if, eseif, else</title>
</head>
<body>
  <a href="index_lab1.php" class="style_button">lab 1</a>
<?php 
if (!empty($_POST["number"])) {$number=$_POST['number'];
  if($number>0){
    echo "<div>Число ".$number." - додатнє</div>";
}
elseif ($number<0) {
echo "<div>Число ".$number." - від'ємне<div>";
}
else{  echo "<div>Число ".$number." дорівнює нулю</div>"; }
}


echo "<br><div> Перевірка числа(додатнє, від'ємне або нуль)<br>
<form action='operator_if.php' method='post'>
Введіть число:<br>
<input type='text' name='number'><br>
<input type='submit' value='Перевірити'>
</form>
</div>
";
?>
</body>
</html>
