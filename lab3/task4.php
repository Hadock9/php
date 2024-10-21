<a href="index_lab3.php" class="style_button">lab 3</a>
<?php
require("../config.php");

// Завдання 1: Накопичення на депозитному рахунку
function depositAccumulation() {
    $initialAmount = 200; 
    $monthlyDeposit = $initialAmount;  
    $interestRate = 0.12; 
    $months = 5 * 12;  

    $totalAmount = 0; 
    for ($i = 0; $i < $months; $i++) {
        
        $totalAmount += $monthlyDeposit;
        
      
        $totalAmount += ($totalAmount * ($interestRate / 12));
        
       
        $monthlyDeposit *= 1.2;
    }

    echo "<p>Сума на депозитному рахунку через 5 років: " . round($totalAmount, 2) . " грн</p>";
}

// Завдання 2: Сума та кількість парних чисел в діапазоні від 50 до 100
function evenNumbersSumAndCount() {
    $sum = 0;
    $count = 0;

    for ($i = 50; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            $sum += $i;
            $count++;
        }
    }

    echo "<p>Сума парних чисел від 50 до 100: " . $sum . "</p>";
    echo "<p>Кількість парних чисел від 50 до 100: " . $count . "</p>";
}

// Завдання 3: Визначити n, при якому сума квадратів натурального ряду 1..n менша за N
function findNForSumOfSquares() {
    $N = 50;  
    $sumOfSquares = 0;
    $n = 0;

    while ($sumOfSquares < $N) {
        $n++;
        $sumOfSquares += $n * $n; 
    }

    echo "<p>Найбільше n, при якому сума квадратів натурального ряду 1..n менша за " . $N . ": " . ($n - 1) . "</p>";
}

echo "<h2>Завдання 1: Накопичення на депозитному рахунку</h2>";
depositAccumulation();

echo "<h2>Завдання 2: Сума та кількість парних чисел</h2>";
evenNumbersSumAndCount();

echo "<h2>Завдання 3: Визначити n для суми квадратів</h2>";
findNForSumOfSquares();
?>