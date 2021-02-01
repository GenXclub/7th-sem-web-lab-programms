<!-- 
	Q6. Write a PHP program to keep track of the number of visitors visiting the web page and to
		display this count of visitors, with proper headings.
 -->
<?php

	$file_name = "count.txt";
	$count = strval(file_get_contents($file_name));
	file_put_contents($file_name, $count + 1);
	echo "You are visitor number: " . $count;

?>