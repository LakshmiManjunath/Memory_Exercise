<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memory-Game</title>
	 
	
	<style>
				div.box{ 
					
					background-color:gold;
					float:left;
					margin:10px;
					}
	</style>
</head>
<body>
	<?php require 'memory_logic.php';?>
</body>
</html>