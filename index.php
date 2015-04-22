<!DOCTYPE html>
<html>
<head>
	<title>Simple To-Do List</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<div class="wrap">
		<div class="task-list">
		<ul>
			<?php require("includes/connect.php"); ?>
		</ul>
			
		</div>
	
	</div>
	<form class="add-new-task" autocomplete="off">
		<input type="text1" name="new-task" placeholder="Add new item..." />
	</form>
</div>
</body>
</html>