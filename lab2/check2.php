<html>
<body>
<a href="index_lab2.php" class="style_button">lab 2</a>
<?php 


if (($_POST["image"])==($_POST["correct"])) { 

    echo '<h1>Congratulations! you chose the right answer!</h1>'; 
    
    
}else{
  echo '<h1>You chose the wrong answer</h1>';
}


?>

</body>
</html>