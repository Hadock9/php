<?php
require("../config.php");
?>
<a href="index_lab4.php" class="style_button">lab 4</a>
<form method="post">
  <p>Запитання 1: Які продукти ви вживаєте? (виберіть всі, що підходять)</p>
  <input type="checkbox" name="q1[]" value="М'ясо"> М'ясо<br>
  <input type="checkbox" name="q1[]" value="Риба"> Риба<br>
  <input type="checkbox" name="q1[]" value="Овочі"> Овочі<br>
  <input type="checkbox" name="q1[]" value="Фрукти"> Фрукти<br>
  
  <p>Запитання 2: Який ваш улюблений вид спорту?</p>
  <input type="radio" name="q2" value="Футбол"> Футбол<br>
  <input type="radio" name="q2" value="Теніс"> Теніс<br>
  <input type="radio" name="q2" value="Баскетбол"> Баскетбол<br>
  
  <p>Запитання 3: Яка ваша улюблена книга?</p>
  <select name="q3">
    <option value="">Виберіть книгу</option>
    <option value="Володар перснів">Володар перснів</option>
    <option value="На західному фронті без змін">На західному фронті без змін</option>
    <option value="Фауст">Фауст</option>
  </select>
  
  <p>Запитання 4: Що ви робите в свій вільний час?</p>
  <select name="q4[]" multiple>
    <option value="Читаю">Читаю</option>
    <option value="Граю в ігри">Граю в ігри</option>
    <option value="Спілкуюсь з друзями">Спілкуюсь з друзями</option>
    <option value="Тренуюсь">Тренуюсь</option>
  </select>
  
  <p>Last field</p>
  <input type="text" name="q5" placeholder="holder">

  <input type="submit" value="Готово">
</form>

<?php

  if(isset($_POST['q5'])){
    $q5_ans = $_POST['q5'];
    echo "Останнє контрольне запитання - <b> $q5_ans </b> <br>";
  }
  else{
    echo "<script>alert('Поле 5 порожнє')</script>";
  }


  if(isset($_POST['q1'])){
    $q1_answers = $_POST['q1'];
    echo "<p>Запитання 1: Які продукти ви вживаєте? (виберіть всі, що підходять)</p>";
    foreach($q1_answers as $answer){
      echo $answer . "<br>";
    }
  } else {
    echo "<script>alert('Поле 1 порожнє')</script>";
  }
  
  if(isset($_POST['q2'])){
    $q2_answer = $_POST['q2'];
    echo "<p>Запитання 2: Який ваш улюблений вид спорту?</p>";
    echo $q2_answer;
  } else {
    echo "<script>alert('Поле 2 порожнє')</script>";
  }
  
  if(isset($_POST['q3'])){
    $q3_answer = $_POST['q3'];
    echo "<p>Запитання 3: Яка ваша улюблена книга?</p>";
    echo $q3_answer;
  } else {
    echo "<script>alert('Поле 3 порожнє')</script>";
  }
  
  if(isset($_POST['q4'])){
    $q4_answers = $_POST['q4'];
    echo "<p>Запитання 4: Що ви робите в свій вільний час?</p>";
    foreach($q4_answers as $answer){
      echo $answer . "<br>";
    }
  } else {
    echo "<script>alert('Поле 4 порожнє')</script>";
  }
?>
