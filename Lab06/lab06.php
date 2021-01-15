<?php

	$file_name = "count.txt";
	$count = strval(file_get_contents($file_name));
	file_put_contents($file_name, $count + 1);
	echo "You are visitor number: " . $count;

?>