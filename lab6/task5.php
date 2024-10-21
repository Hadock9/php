<?php
require("../config.php");
?>

<html>
    <body>
        <a href='index_lab6.php' class='style_button'>lab 6</a>
        <form action="task5.php" method="post">
            <p>Enter the post code of india</p>
            <input type="text" name="code">
            <button type="submit">Submit</button>
        </form>
    </body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST["code"];

    if(!preg_match('/^[1-9]\d{2} \d{3}$/', $code)){
        echo "<p'>Try again! Code is incorrect!</p>";
    }
    else{
        echo "<p>The code is correct</p>";
    }
}
?>