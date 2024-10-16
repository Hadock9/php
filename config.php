<?php
#$config_host_name=$config{'host_name'};
#include_once("db.php");
$LastModified_unix = strtotime(date("D, d M Y H:i:s", filectime($_SERVER['SCRIPT_FILENAME']))); 
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix); 


?>
 
<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
<link rel="stylesheet" type="text/css" href="../button.css"> 
<link rel="stylesheet" type="text/css" href="./last_modifided.css"> 

<h3 class="Last_modified"> <?php echo "Last modified: $LastModified"."<br>";?> </h3>

 
