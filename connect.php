<?php
//why is this important? why does this have to go first
$mysqli -> new mysqli('localhost', 'root', 'root', 'tasks');
if($mysqli->connect_error){
	die('Connect Error (' . $mysqli_>connrct_errno .')'
		. $mysqli->connect_error);
}else{
	echo "Connection Made"
}
$mysqli->close();
?>