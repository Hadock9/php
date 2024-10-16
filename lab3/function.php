<?php
function create_table2($data, $border = 1, $cellpadding = 4, $cellspacing = 4)
{
	echo "<h4> Результат виклику функції create_table2: </h4> border=$border";
	echo "<table border=$border  cellpadding=$cellpadding cellspacing=$cellspacing>\n";
	reset($data); //    встановлює покажчик масиву на його початок
	$value = current($data); //current повертає поточний елемент масиву
	while ($value) {
		echo "<tr><td>$value</td></tr>\n";
		$value = next($data);
		//next - переміщують показник на елемент вперед на один елемент; 
		//next – спочатку змінює покажчик, потім – повертає значення, each–навпаки;
	}
	echo '</table>';
	echo "<div>Кількість параметрів:" . func_num_args() . "<br />";
	//Функція func_num_args() визначає, скільки аргументів було передано функції користувача
	$args = func_get_args();
	//func_get_args() повертає масив, який містить ці аргументи
	foreach ($args as $arg)
		echo $arg . "<br/>";
	echo "</div>";
}

function foo_task_2()
{

	for ($i = 0; $i < 10; $i++) {
		$array[$i] = mt_rand(1, 20);
		echo "<div> A[" . $i . "] =" . $array[$i] . "</div><br>";
	}
	$min = $array[0];
	$max = $array[0];
	$sum = 0;
	for ($i = 0; $i < 10; $i++) {
		if ($array[$i] > $max) {
			$max = $array[$i];
			$indexMax = $i;
		}
		if ($array[$i] < $min) {
			$min = $array[$i];
			$indexMin = $i;
		}
		$sum += $array[$i];
	}

	$avg = $sum / 10;

	echo "<div>Мінімум: індекс - " . $indexMin . ", значення - " . $min . "</div><br>";
	echo "<div>Максимум: індекс - " . $indexMax . ", значення - " . $max . "</div><br>";
	echo "<div>Average value of the array - " . $avg . "</div><br>";
}

function foo_task_3()
{
	for ($i = 0; $i < 10; $i++) {
		$arr[$i] = mt_rand(1, 20);
		echo "<div>" . $arr[$i] . " ^ 2 = " . $arr[$i] * $arr[$i] . "</div><br>";
	}
}


function foo_task_5_1($arr, $order = "asc")
{
	$reverseOrder = ($order === 'desc');

	if ($reverseOrder) {
		$iterator = range(count($arr) - 1, 0, -1);
	} else {
		$iterator = range(0, count($arr) - 1);
	}

	foreach ($iterator as $i) {
		echo "[$i] => " . $arr[$i] . "<br>";
	}
}

function foo_task_5_2($n, $array)
{
	echo "<table border='1'>";
	for ($i = 0; $i < $n; $i++) {
		echo "<tr>";
		for ($j = 0; $j < $n; $j++) {
			echo "<td>" . $array[$i][$j] . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

	// знаходимо мінімальні значення рядків та зберігаємо їх у масиві $minValues
	$minValues = array();
	echo "min values<br>";
	for ($i = 0; $i < $n; $i++) {
		$minValues[$i] = $array[$i][0];
		for ($j = 0; $j < $n; $j++) {
			if ($minValues[$i] > $array[$i][$j]) {
				$minValues[$i] = $array[$i][$j];
			}
		}
		echo $minValues[$i] . " ";
	}

	echo "<br>last col values<br>";

	$lastRow = array();
	for ($i = 0; $i < $n; $i++) {
		$lastRow[$i] = $array[$i][$n - 1];
		echo $lastRow[$i] . " ";
	}
}


function task_6_foo($n)
{
	$arr = array();
	for ($i = 1; $i <= $n; $i++) {
		$arr[$i] = $i ** 2;
	}

	echo '<table border="1">';
	foreach ($arr as $key => $value) {
		echo '<tr><td>' . $key . '^ 2' . '</td><td>' . $value . '</td></tr>';
	}
	echo '</table>';
}

?>