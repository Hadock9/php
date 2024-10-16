<a href="index_lab3.php" class="style_button">lab 3</a>
<?php
    require("../config.php");

    function task_4_var_8(){
        $dist = 10;
        $result = 50;
        $count = 0;
        while($dist < $result){
            $dist += $dist * 0.1;
            $count += 1;
        }
    
        echo "<p>The runner runs 50 km by " . $count . " days</p>";
    }
    
    function task_4_var_9(){
        $sum = 0;
        $prod = 1;
        for($i = 0; $i <= 20; $i++){
            if($i % 2 == 0){
                $sum += $i;
            }
            else{
                $prod *= $i;
            }
        }
    
        echo "<p> The sum of even numbers is " . $sum ."</p>";
        echo "<p> The product of of odd numbers is " . $prod ."</p>";  
    }
    
    function task_4_var_10(){
        
        echo "<table>";
        echo "<tr><th>x</th><th>y</th></tr>";
        for ($x = 0; $x <= 4; $x += 0.5) {
            $y = 2 * $x;
            echo "<tr><td>$x</td><td>$y</td></tr>";
        }
        echo "</table>";
    
    
    }

    echo "<h2>Var 8</h2>";
    task_4_var_8();
    echo "<h2>Var 9</h2>";
    task_4_var_9();
    echo "<h2>Var 9</h2>";
    task_4_var_10();
?>