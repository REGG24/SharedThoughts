<?php
 
$mysqli = new mysqli("localhost", "root", "Toshiba4$", "sharedthoughts"); //local
//$mysqli = new mysqli("localhost", "id9628849_esau", "Toshiba", "id9628849_sharedthoughts"); //servidor
 
if($mysqli->connect_errno) {
	echo "<b>Failed to connect the database: </b>" . $mysqli->connect_errno . "---" . $mysqli->connect_error;
}

return $mysqli;
 
?>