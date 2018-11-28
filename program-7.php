<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="1">
	<style type="text/css">
		.dat{
			font-size: 30px;
			background-color: black;
			color: white;
		}
	</style>
</head>
<body>
	<center>
	<h1>Display Current Date & Time</h1>
	<h2>
		<?php
		echo "SERVER TIME : <span class='dat'> " . date("h:i:s a")."</span>";
		echo "<br />";
		echo "CURRENT SERVER DATE : <span class='dat'>" . date("d-m-Y")."</span>";
		date_default_timezone_set('Asia/Kolkata');
		echo "<br />";
		echo "CURRENT TIME : <span style='color:red'>" . date("h:i:s a") . "</span>";
		?>
	</h2>
	</center>
</body>
</html>