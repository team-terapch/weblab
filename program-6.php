<?php
	$file = 'c.txt';
	$count = strval(file_get_contents($file));
	file_put_contents($file, $count + 1); 
	echo "<center><h1>VISITOR COUNT</h1>";
	echo "<h3>You are visitor number:".$count."</h3></center>"; 
?>