<a href='index_lab5.php' class='style_button'>lab 5</a>
<?php
require("../config.php");

$text = file_get_contents("files/p1.txt");
$text = preg_replace('/\s+/', ' ', $text);
echo $text; 

echo "<br><hr>";

$text = file_get_contents("files/var9.txt");
echo "<em>" . $text . "</em><br>";

$text = str_replace(":", ",", $text);

echo $text;


echo "<br><hr>";
$text = file_get_contents("files/var10.txt");
echo $text. "<br>"; 
$open = 0;
$close = 0;
foreach(str_split($text) as $char){
    if($char == "("){
        $open++;
    }
    else if($char == ")"){
        $close++;
    }
}
if($close == $open){
    echo 1;
}
else{
    echo $open - $close;
}
?>